<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Book;
use App\Models\Review;
use App\Models\Comment;
use Illuminate\Http\Request;

class WebController extends Controller
{
    /**
     * Display the user homepage.
     */
    public function index()
    {
        $categories = $categories = Category::where('parent_id','=',0)->with('childs')->get();
        $books = Book::all();
        return view('frontend.welcome', ["categories"=>$categories, "books"=>$books]);
    }

    /**
     * Display the book product page.
     */
    public function details($id)
    {
        $reviews = Review::where('book_id','=',$id)->get();
        $comments = Comment::whereIn('review_id',$reviews)->get();
        return view('product', ["reviews"=>$reviews, "comments"=>$comments]);
    }

    public function filterCategory($id)
    {
        $html = '';
        if($id === 0) return route('frontend.welcome', ["books"=>Book::all()]);
        $books = Book::where('book_category_id', $id)->get();
        foreach($books as $book){
            $html .= '<div class="pb-content">
                <div class="prd-img-cont">
                    <div class="pb-image-cont">
                        <a href="#" class="image-container" title="view details">
                            <noscript>
                                <img src="//prodimage.images-bn.com/pimages/9780063335776_p0_v6_s.jpg" alt="Title: Nineteen Steps, Author: Millie Bobby Brown" data-bottom-align>
                            </noscript>
                            <img src="'.$book->book_cover.'" class="lp-lazy ResolveComplete" data-resolvechain="product=path[/pimages/9780063335776_p0_v6]&amp;call=url[file:common/decodeProduct.chain]" alt="Title: Nineteen Steps, Author: Millie Bobby Brown" data-bottom-align="" id="resolve_9">
                        </a>
                    </div>
                </div>
                <div class="product-title">
                    <a href="#"><span class="span-with-normal-white-space">'.$book->book_title.'</span></a>
                </div>
                <div class="product-contributor">
                    <a href="/s/%22Millie Bobby Brown%22;jsessionid=DC74E423DECC90BF5803D6F30FDF8169.prodny_store02-atgap16?Ntk=P_key_Contributor_List&amp;Ns=P_Sales_Rank&amp;Ntx=mode+matchall">
                        '.$book->book_author.'
                    </a>
                </div>
                <div data-bv-show="inline_rating" data-bv-product-id="9780063335776">

                </div>
            </div>';
        }
        return $html;
    }
}
