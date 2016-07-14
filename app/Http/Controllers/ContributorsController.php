<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;
use Gate;
use Response;
use Session;

use App\Org;
use App\User;

class ContributorsController extends Controller
{
    /**
     * Add a contributor for the given org.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        //dd($request);
        $org = Org::findOrFail($id);
        
        // authorization
        if (Gate::denies('update-org', $org)) abort(403);

        $user = User::where('email', $request->email)->first();
        if ($user !== null)
        {   
            $org_ids[] = null;
            foreach($user->orgs as $user_org)
                $org_ids[] = $user_org->pivot->org_id;
            
            if(!is_null($org_ids) && !in_array($org->id, $org_ids))
                $org->users()->attach($user->id);
            
            Session::flash('success', 'Contributor successfully added!');
        }
        else
        {
            Session::flash('failure', 'ERROR: That email does not match any users in our records.');
        }
        
    	return back();
    }

    /**
     * Destroy the contributor entry.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $user_id) 
    {
        $org = Org::findOrFail($id);
        
        // authorization
        if (Gate::denies('update-org', $org)) { abort(403); }
        
        $org->users()->detach($user_id);

    	return back();
    }

    /**
     * Set the current user to 'watch/unwatch' the org.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function watch($id)
    {
        $org = Org::findOrFail($id);
        
        // authorization
        if (!Auth::check()) { abort(403); }

        // check if they are a watcher or not
        if ($org->users->where('id', Auth::user()->id)->first()->pivot->watcher)
        {
            $org->users()->updateExistingPivot(Auth::user()->id, ['watcher' => 0]);
        }
        else
        {
            $org->users()->updateExistingPivot(Auth::user()->id, ['watcher' => 1]);
        }

        return back();
    }
}
