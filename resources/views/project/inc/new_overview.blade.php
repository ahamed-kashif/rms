<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table>
                <tbody class="table table-striped table-bordered">
                <tr class="col-sm-12">
                    <th scope="row">Project Name:</th>
                    <td>{{isset($project) ? $project->name : ''}}</td>
                </tr>
                <tr>
                    <th>Project Location:</th>
                    <td>{{isset($project) ? $project->address : ''}}</td>
                </tr>
                <tr>
                    <th>Project Details:</th>
                    <td>{{isset($project) ? $project->description : ''}}</td>
                </tr>
                <tr>
                    <th>Project Budget:</th>
                    <td>{{isset($project) ? '৳ '.$project->budget : ''}}</td>
                </tr>
                <tr>
                    <th>Remaining Budget:</th>
                    <td>{{isset($project) ? '৳ '.$project->budget : ''}}</td>
                </tr>
                </tbody>
            </table>
            <br>
            <br>
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>......</th>
                        <th>Individual Budget</th>
                        <th>Remaining Budget</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th>Contractors Budget</th>
                        <td>{{isset($project) ? $project->description : ''}}</td>
                        <td>{{isset($project) ? $project->description : ''}}</td>
                    </tr>
                    <tr>
                        <th>Suppliers Budget:</th>
                        <td>{{isset($project) ? '৳ '.$project->budget : ''}}</td>
                        <td>{{isset($project) ? '৳ '.$project->budget : ''}}</td>
                    </tr>
                    <tr>
                        <th>Engineers Budget:</th>
                        <td>{{isset($project) ? '৳ '.$project->budget : ''}}</td>
                        <td>{{isset($project) ? '৳ '.$project->budget : ''}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>


