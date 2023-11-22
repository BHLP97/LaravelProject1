<div class="iq-sidebar">
    <div class="iq-sidebar-logo d-flex justify-content-between">
       <a href="index.html">
       <img src="{{asset('backend/images/logo.png')}}" class="img-fluid" alt="">
       <span>CMS</span>
       </a>
       <div class="iq-menu-bt-sidebar">
             <div class="iq-menu-bt align-self-center">
                <div class="wrapper-menu">
                   <div class="main-circle"><i class="ri-more-fill"></i></div>
                   <div class="hover-circle"><i class="ri-more-2-fill"></i></div>
                </div>
             </div>
          </div>
    </div>
    <div id="sidebar-scrollbar">
       <nav class="iq-sidebar-menu">
          <ul id="iq-sidebar-toggle" class="iq-menu">
             <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Pages</span></li>
             <li>
                <a href="#category-info" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-user-3-fill"></i><span>Categories</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                <ul id="category-info" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                   <li><a href="{{route('admin.category')}}"><i class="ri-file-list-fill"></i>All Categories</a></li>
                   <li><a href="{{route('admin.category.create')}}"><i class="ri-user-add-fill"></i> Add Category</a></li>
                </ul>
             </li>
             <li>
               <a href="#book-info" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-user-3-fill"></i><span>Books</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
               <ul id="book-info" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                  <li><a href="{{route('admin.book')}}"><i class="ri-file-list-fill"></i>All Books</a></li>
                  <li><a href="{{route('admin.book.create')}}"><i class="ri-user-add-fill"></i> Add Book</a></li>
               </ul>
            </li>
            <li>
               <a href="#review-info" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-user-3-fill"></i><span>Reviews</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
               <ul id="review-info" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                  <li><a href="{{route('admin.review')}}"><i class="ri-file-list-fill"></i>All Reviews</a></li>
                  <li><a href="{{route('admin.review.create')}}"><i class="ri-user-add-fill"></i> Add Review</a></li>
               </ul>
            </li>
            <li>
               <a href="#comment-info" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-user-3-fill"></i><span>Comments</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
               <ul id="comment-info" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                  <li><a href="{{route('admin.comment')}}"><i class="ri-file-list-fill"></i>All Comments</a></li>
                  <li><a href="{{route('admin.comment.create')}}"><i class="ri-user-add-fill"></i> Add Comment</a></li>
               </ul>
            </li>
            <li>
               <a href="#user-info" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-user-3-fill"></i><span>Users</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
               <ul id="user-info" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                  <li><a href="{{route('admin.user')}}"><i class="ri-file-list-fill"></i>All Users</a></li>
                  <li><a href="{{route('admin.user.create')}}"><i class="ri-user-add-fill"></i> Add User</a></li>
               </ul>
            </li>
          </ul>
       </nav>
       <div class="p-3"></div>
    </div>
</div>