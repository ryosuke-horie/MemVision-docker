<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMemberRequest;
use App\Http\Requests\UpdateMemberRequest;
use App\Models\Member;
use Inertia\Inertia;
use Inertia\Response;

class MemberController extends Controller
{
    /**
     * 会員情報一覧
     * @return \Inertia\Response
     */
    public function index(): Response
    {
        return Inertia::render('Members/Index', [
            'members' => Member::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Members/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMemberRequest $request)
    {
        return Inertia::render('Members/Index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Member $member)
    {
        return Inertia::render('Members/Show', [
            'member' => $member,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $member_id)
    {
        echo $member_id;
        return Inertia::render('Members/Edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMemberRequest $request, Member $member)
    {
        return Inertia::render('Members/Index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $member_id)
    {
        echo $member_id;
        return Inertia::render('Members/Index');
    }
}
