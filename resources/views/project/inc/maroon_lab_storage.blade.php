<div class="table-responsive">
    <table class="table table-nowrap table-centered table-hover mb-0 paginatable">
        <tbody>
        @if($project->getMedia()->count() > 0)
            @foreach($project->getMedia() as $media)
            <tr class="item">
                <td style="width: 45px;">
                    <div class="avatar-sm">
                        <span class="avatar-title rounded-circle bg-soft-primary text-primary font-size-24">
                            <i class="bx bxs-file-doc"></i>
                        </span>
                    </div>
                </td>
                <td>
                    <h5 class="font-size-14 mb-1"><a href="javascript:void(0)" class="text-dark">{{$media->file_name}}</a></h5>
                    <small>Size : {{round($media->size/(1024),2)}} KB</small>
                </td>
                <td>
                    <div class="text-center">
                        <a href="{{route('resource.download',['id' => $project->id, 'uuid' => $media->uuid])}}" class="text-dark"><i class="bx bx-download h3 m-0"></i></a>
                    </div>
                </td>
            </tr>
            @endforeach
        @else
        <tr>
            <td style="width: 45px;">
                <div class="avatar-sm">
                    <span class="avatar-title rounded-circle bg-soft-primary text-primary font-size-24">
                        <i class="mdi mdi-delete-empty"></i>
                    </span>
                </div>
            </td>
            <td>
                <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$project->name}}'s drive is Empty!</a></h5>
            </td>
        </tr>
        @endif
        </tbody>
    </table>
</div>
@push('custom-js')
    <script type="text/javascript">
        (function($) {
            var pagify = {
                items: {},
                container: null,
                totalPages: 1,
                perPage: 3,
                currentPage: 0,
                createNavigation: function() {
                    this.totalPages = Math.ceil(this.items.length / this.perPage);

                    $('.pagination', this.container.parent()).remove();
                    var pagination = $('<div class="pagination mb-0"></div>').append('<a class="nav prev disabled mr-2 ml-auto" role="button" href="javascript:void(0)" data-next="false"><i class="bx bx-skip-previous-circle font-size-20 text-primary"></i></a>');

                    // for (var i = 0; i < this.totalPages; i++) {
                    //     var pageElClass = "page";
                    //     if (!i)
                    //         pageElClass = "page current";
                    //     var pageEl = '<a href="javascript:void(0)" class="font-size-15 mr-3 nav-link' + pageElClass + '" data-page="' + (
                    //         i + 1) + '">' + (
                    //         i + 1) + "</a>";
                    //     pagination.append(pageEl);
                    // }
                    pagination.append('<a class="nav next" data-next="true" role="button" href="javascript:void(0)"><i class="bx bx-skip-next-circle font-size-20 text-primary"></i></a>');

                    this.container.after(pagination);

                    var that = this;
                    $("body").off("click", ".nav");
                    this.navigator = $("body").on("click", ".nav", function() {
                        var el = $(this);
                        that.navigate(el.data("next"));
                    });

                    $("body").off("click", ".page");
                    this.pageNavigator = $("body").on("click", ".page", function() {
                        var el = $(this);
                        that.goToPage(el.data("page"));
                    });
                },
                navigate: function(next) {
                    // default perPage to 5
                    if (isNaN(next) || next === undefined) {
                        next = true;
                    }
                    $(".pagination .nav").removeClass("disabled");
                    if (next) {
                        this.currentPage++;
                        if (this.currentPage > (this.totalPages - 1))
                            this.currentPage = (this.totalPages - 1);
                        if (this.currentPage == (this.totalPages - 1))
                            $(".pagination .nav.next").addClass("disabled");
                    }
                    else {
                        this.currentPage--;
                        if (this.currentPage < 0)
                            this.currentPage = 0;
                        if (this.currentPage == 0)
                            $(".pagination .nav.prev").addClass("disabled");
                    }

                    this.showItems();
                },
                updateNavigation: function() {

                    var pages = $(".pagination .page");
                    pages.removeClass("current");
                    $('.pagination .page[data-page="' + (
                        this.currentPage + 1) + '"]').addClass("current");
                },
                goToPage: function(page) {

                    this.currentPage = page - 1;

                    $(".pagination .nav").removeClass("disabled");
                    if (this.currentPage == (this.totalPages - 1))
                        $(".pagination .nav.next").addClass("disabled");

                    if (this.currentPage == 0)
                        $(".pagination .nav.prev").addClass("disabled");
                    this.showItems();
                },
                showItems: function() {
                    this.items.hide();
                    var base = this.perPage * this.currentPage;
                    this.items.slice(base, base + this.perPage).show();

                    this.updateNavigation();
                },
                init: function(container, items, perPage) {
                    this.container = container;
                    this.currentPage = 0;
                    this.totalPages = 1;
                    this.perPage = perPage;
                    this.items = items;
                    this.createNavigation();
                    this.showItems();
                }
            };

            // stuff it all into a jQuery method!
            $.fn.pagify = function(perPage, itemSelector) {
                var el = $(this);
                var items = $(itemSelector, el);

                // default perPage to 5
                if (isNaN(perPage) || perPage === undefined) {
                    perPage = 3;
                }

                // don't fire if fewer items than perPage
                if (items.length <= perPage) {
                    return true;
                }

                pagify.init(el, items, perPage);
            };
        })(jQuery);

        $(document).ready(function () {
            $('.status').on('click',function(){

            });
            $(".paginatable").pagify(3, ".item");
        })
    </script>
@endpush
