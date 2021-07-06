<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use App\Models\Wisata;
use Illuminate\Http\Request;


class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = Review::all();
        return view('admin.review.index',['reviews' => $reviews]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $wisata = Wisata::all();
        return view('admin.review.tambah',['wisatas' => $wisata]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $warn_required = 'bidang harus diisi';
        $this->validate($request,[
            'username' => 'required',
            'rating' => 'required',
            'message' => 'required',
            'wisata' => 'required'
        ], [
            'username.required' => $warn_required,
            'rating.required' => $warn_required,
            'message.required' => $warn_required,
            'wisata.required' => $warn_required
        ]);

        $wisata = Wisata::find($request->wisata);
        
        $wisata->reviews()->create($request->except('wisata'));
        
        return redirect()->route('review.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    {
        // return $review;
        $namaWisata = Wisata::all();
        return view('admin.review.edit',['review' => $review, 'wisatas' => $namaWisata]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {
        $warn_required = 'bidang harus diisi';

        $this->validate($request,[
            'username' => 'required',
            'rating' => 'required',
            'message' => 'required',
            'wisata' => 'required'
        ], [
            'username.required' => $warn_required,
            'rating.required' => $warn_required,
            'message.required' => $warn_required,
            'wisata.required' => $warn_required
        ]);

        $wisata = Wisata::find($request->wisata);
        $review->username = $request->username;
        $review->rating = $request->rating;
        $review->message = $request->message;
        $wisata->reviews()->save($review);

        return redirect()->route('review.index')->with('status', 'Data berhasil diupdate');
 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
        $review->delete();
        return redirect()->route('review.index');
    }
}
