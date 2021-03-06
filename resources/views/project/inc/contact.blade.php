<div class="table-responsive">
    <table class="table table-centered table-nowrap">
        <tbody>
        @foreach($contacts as $contact)
            <tr>
                <td>
                    <div class="avatar-xs">
                        <span class="avatar-title rounded-circle bg-soft-primary text-primary font-size-16">
                            {{$contact->name[0]}}
                        </span>
                    </div>
                </td>
                <td><h6 class="m-0">{{$contact->name}}</h6></td>
                <td>
                    <div>
                        <span class="badge badge-primary font-size-10">{{$contact->pivot->purpose}}</span>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
