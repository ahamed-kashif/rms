<div class="card">
    <div class="card-body">
        <div class="text-right">
            <a href="{{route('project.edit',$project->id)}}"><i class="fa fa-edit"></i><span class="text-alias"> Edit</span></a>
        </div>
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
                    <th>Total Received:</th>
                    <td>{{number_format($receivedAmount)}}</td>
                </tr>
                <tr>
                    <th>Total Expense:</th>
                    <td>{{number_format($expenseAmount)}}</td>
                </tr>
                <tr>
                    <th>Remaining Amount:</th>
                    <td>{{number_format($remainingAmount)}}</td>
                </tr>
                </tbody>
            </table>
            <br>
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <tbody>
                    <tr>
                        <th>Project Budget:</th>
                        <td class="font-weight-bold">{{isset($project) ? number_format($project->budget) : ''}}</td>
                    </tr>
                    <tr>
                        <th>Remaining Budget:</th>
                        <td class="font-weight-bold">{{isset($project) && $projectBalance > 0 ? number_format($projectBalance) : number_format($project->budget)}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
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
                        <td>{{isset($project) ? $project->contractor_budget : ''}}</td>
                        <td>{{isset($contractorBalance) && $contractorBalance > 0 ? number_format($contractorBalance) :number_format( $project->contractor_budget)}}</td>
                    </tr>
                    <tr>
                        <th>Suppliers Budget:</th>
                        <td>{{isset($project) ? $project->supplier_budget : ''}}</td>
                        <td>{{isset($supplierBalance) && $supplierBalance > 0 ? number_format($supplierBalance) : number_format($project->supplier_budget)}}</td>
                    </tr>
                    <tr>
                        <th>Engineers Budget:</th>
                        <td>{{isset($project) ? $project->engineer_budget : ''}}</td>
                        <td>{{isset($engineerBalance) && $engineerBalance > 0 ? number_format($engineerBalance) : number_format($project->engineer_budget)}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>


