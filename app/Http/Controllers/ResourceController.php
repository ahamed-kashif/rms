<?php

namespace App\Http\Controllers;

use App\Models\Contractor;
use App\Models\Customer;
use App\Models\Engineer;
use App\Models\Investor;
use App\Models\Project;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class ResourceController extends Controller
{


    public function index($id)
    {
        $user = Auth::user();
        $project = Project::find($id);
        $medias = $project->getMedia();
        $title = $project->name.'\'s Drive';
        $breadcrumbs['projects'] = route('project.index');
        $breadcrumbs[$project->name] = route('project.show',$project->id);
        $breadcrumbs['uploads'] = 'javascript:void(0)';
        if ($user->can('index project')){
            return view('project_resource.index')->with([
                'title' => $title,
                'breadcrumbs' => $breadcrumbs,
                'medias' => $medias,
                'project' => $project,
                'new_upload_url' => route('resource.create',$project->id)
            ]);
        }
        return redirect()->route('home')->with('error', 'Unauthorized Access!');
    }

    public function index_contractor($id)
    {
        $user = Auth::user();
        $project = Contractor::find($id);
        $medias = $project->getMedia();
        $title = $project->name.'\'s Drive';
        $breadcrumbs['Contractors'] = route('contractor.index');
        $breadcrumbs[$project->name] = route('contractor.show',$project->id);
        $breadcrumbs['uploads'] = 'javascript:void(0)';
        if ($user->can('index contractor')){
            return view('project_resource.index')->with([
                'title' => $title,
                'breadcrumbs' => $breadcrumbs,
                'medias' => $medias,
                'project' => $project,
                'new_upload_url' => route('resource.create.contractor',$project->id)
            ]);
        }
        return redirect()->route('home')->with('error', 'Unauthorized Access!');
    }

    public function index_engineer($id)
    {
        $user = Auth::user();
        $project = Engineer::find($id);
        $medias = $project->getMedia();
        $title = $project->name.'\'s Drive';
        $breadcrumbs['Engineers'] = route('employee.index');
        $breadcrumbs[$project->name] = route('engineer.show',$project->id);
        $breadcrumbs['uploads'] = 'javascript:void(0)';
        if ($user->can('index engineer')){
            return view('project_resource.index')->with([
                'title' => $title,
                'breadcrumbs' => $breadcrumbs,
                'medias' => $medias,
                'project' => $project,
                'new_upload_url' => route('resource.create.engineer',$project->id)
            ]);
        }
        return redirect()->route('home')->with('error', 'Unauthorized Access!');
    }

    public function index_customer($id)
    {
        $user = Auth::user();
        $project = Customer::find($id);
        $medias = $project->getMedia();
        $title = $project->full_name.'\'s Drive';
        $breadcrumbs['Customers'] = route('customer.index');
        $breadcrumbs[$project->full_name] = route('customer.show',$project->id);
        $breadcrumbs['uploads'] = 'javascript:void(0)';
        if ($user->can('index customer')){
            return view('project_resource.index')->with([
                'title' => $title,
                'breadcrumbs' => $breadcrumbs,
                'medias' => $medias,
                'project' => $project,
                'new_upload_url' => route('resource.create.customer',$project->id)
            ]);
        }
        return redirect()->route('home')->with('error', 'Unauthorized Access!');
    }

    public function index_supplier($id)
    {
        $user = Auth::user();
        $project = Supplier::find($id);
        $medias = $project->getMedia();
        $title = $project->name.'\'s Drive';
        $breadcrumbs['Suppliers'] = route('supplier.index');
        $breadcrumbs[$project->name] = route('supplier.show',$project->id);
        $breadcrumbs['uploads'] = 'javascript:void(0)';
        if ($user->can('index supplier')){
            return view('project_resource.index')->with([
                'title' => $title,
                'breadcrumbs' => $breadcrumbs,
                'medias' => $medias,
                'project' => $project,
                'new_upload_url' => route('resource.create.supplier',$project->id)
            ]);
        }
        return redirect()->route('home')->with('error', 'Unauthorized Access!');
    }

    public function index_investor($id)
    {
        $user = Auth::user();
        $project = Investor::find($id);
        $medias = $project->getMedia();
        $title = $project->name.'\'s Drive';
        $breadcrumbs['Investors'] = route('investor.index');
        $breadcrumbs[$project->name] = route('investor.show',$project->id);
        $breadcrumbs['uploads'] = 'javascript:void(0)';
        if ($user->can('index investor')){
            return view('project_resource.index')->with([
                'title' => $title,
                'breadcrumbs' => $breadcrumbs,
                'medias' => $medias,
                'project' => $project,
                'new_upload_url' => route('resource.create.investor',$project->id)
            ]);
        }
        return redirect()->route('home')->with('error', 'Unauthorized Access!');
    }



    public function upload($id)
    {
        $user = Auth::user();
        $project = Project::find($id);
        $title = $project->name.'\'s Drive';
        $breadcrumbs['projects'] = route('project.index');
        $breadcrumbs[$project->name] = route('project.show',$project->id);
        $breadcrumbs['upload'] = 'javascript:void(0)';
        if($user->can('update project')){
            return view('project_resource.upload')->with([
                'title' => $title,
                'breadcrumbs' => $breadcrumbs,
                'project' => $project,
                'upload_url' => route('ajax.upload.resource',$project->id),
                'delete_url' => route('ajax.delete.resource.by_name',$project->id),
                'entity' => ' project',
                'back_url' => route('project.show',$project->id),
                'browse_url' => route('resource.index',$project->id)
            ]);
        }
    }
    public function upload_contractor($id)
    {
        $user = Auth::user();
        $project = Contractor::find($id);
        $title = $project->name.'\'s Drive';
        $breadcrumbs['Contractors'] = route('contractor.index');
        $breadcrumbs[$project->name] = route('contractor.show',$project->id);
        $breadcrumbs['upload'] = 'javascript:void(0)';
        if($user->can('update contractor')){
            return view('project_resource.upload')->with([
                'title' => $title,
                'breadcrumbs' => $breadcrumbs,
                'project' => $project,
                'upload_url' => route('ajax.upload.resource.contractor',$project->id),
                'delete_url' => route('ajax.delete.resource.contractor',$project->id),
                'entity' => ' contractor',
                'back_url' => route('contractor.show',$project->id),
                'browse_url' => route('resource.index.contractor',$project->id)
            ]);
        }
    }

    public function upload_customer($id)
    {
        $user = Auth::user();
        $project = Customer::find($id);
        $title = $project->full_name.'\'s Drive';
        $breadcrumbs['Customers'] = route('customer.index');
        $breadcrumbs[$project->full_name] = route('customer.show',$project->id);
        $breadcrumbs['upload'] = 'javascript:void(0)';
        if($user->can('update customer')){
            return view('project_resource.upload')->with([
                'title' => $title,
                'breadcrumbs' => $breadcrumbs,
                'project' => $project,
                'upload_url' => route('ajax.upload.resource.customer',$project->id),
                'delete_url' => route('ajax.delete.resource.customer',$project->id),
                'entity' => ' customer',
                'back_url' => route('customer.show',$project->id),
                'browse_url' => route('resource.index.customer',$project->id)
            ]);
        }
    }

    public function upload_engineer($id)
    {
        $user = Auth::user();
        $project = Engineer::find($id);
        $title = $project->name.'\'s Drive';
        $breadcrumbs['Engineers'] = route('engineer.index');
        $breadcrumbs[$project->name] = route('engineer.show',$project->id);
        $breadcrumbs['upload'] = 'javascript:void(0)';
        if($user->can('update engineer')){
            return view('project_resource.upload')->with([
                'title' => $title,
                'breadcrumbs' => $breadcrumbs,
                'project' => $project,
                'upload_url' => route('ajax.upload.resource.engineer',$project->id),
                'delete_url' => route('ajax.delete.resource.engineer',$project->id),
                'entity' => ' engineer',
                'back_url' => route('engineer.show',$project->id),
                'browse_url' => route('resource.index.engineer',$project->id)
            ]);
        }
    }
    public function upload_supplier($id)
    {
        $user = Auth::user();
        $project = Supplier::find($id);
        $title = $project->name.'\'s Drive';
        $breadcrumbs['Suppliers'] = route('supplier.index');
        $breadcrumbs[$project->name] = route('supplier.show',$project->id);
        $breadcrumbs['upload'] = 'javascript:void(0)';
        if($user->can('update supplier')){
            return view('project_resource.upload')->with([
                'title' => $title,
                'breadcrumbs' => $breadcrumbs,
                'project' => $project,
                'upload_url' => route('ajax.upload.resource.supplier',$project->id),
                'delete_url' => route('ajax.delete.resource.supplier',$project->id),
                'entity' => ' supplier',
                'back_url' => route('supplier.show',$project->id),
                'browse_url' => route('resource.index.supplier',$project->id)
            ]);
        }
    }
    public function upload_investor($id)
    {
        $user = Auth::user();
        $project = Investor::find($id);
        $title = $project->name.'\'s Drive';
        $breadcrumbs['Investors'] = route('investor.index');
        $breadcrumbs[$project->name] = route('investor.show',$project->id);
        $breadcrumbs['upload'] = 'javascript:void(0)';
        if($user->can('update investor')){
            return view('project_resource.upload')->with([
                'title' => $title,
                'breadcrumbs' => $breadcrumbs,
                'project' => $project,
                'upload_url' => route('ajax.upload.resource.investor',$project->id),
                'delete_url' => route('ajax.delete.resource.investor',$project->id),
                'entity' => ' supplier',
                'back_url' => route('investor.show',$project->id),
                'browse_url' => route('resource.index.investor',$project->id)
            ]);
        }
    }


    public function download($id,$uuid)
    {
        $media = Media::findByUuid($uuid);
        return response()->download($media->getPath(), $media->file_name);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return mixed
     */
    public function destroy($id,$uuid)
    {
        $user = Auth::user();
        if($user->can('update project')){
            $media = Media::findByUuid($uuid);
            try{
                $media->delete();
                return redirect()->back()->with('success','File has been deleted!');
            }catch (\Exception $e){
                return redirect()->back()->withErrors($e->getMessage());
            }
        }else{
            return redirect()->route('home')->with('error','Unauthorized Access!');
        }
    }
}
