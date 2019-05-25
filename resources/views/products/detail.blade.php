@extends('layouts.master2')

@section('content')

      @include('layouts.detail')

    {{-- <section class="mt-5">
      <div class="container">
        <ul role="tablist" class="nav nav-tabs flex-column flex-sm-row">
          <li class="nav-item"><a data-toggle="tab" href="#description" role="tab" class="nav-link detail-nav-link active">Description</a></li>
          <li class="nav-item"><a data-toggle="tab" href="#additional-information" role="tab" class="nav-link detail-nav-link">Additional Information</a></li>
          <li class="nav-item"><a data-toggle="tab" href="#reviews" role="tab" class="nav-link detail-nav-link">Reviews</a></li>
        </ul>
        <div class="tab-content py-4">
          <div id="description" role="tabpanel" class="tab-pane active px-3">
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. LOLUt enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. LOLDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. LOLUt enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. LOLDuis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div id="additional-information" role="tabpanel" class="tab-pane">
            <div class="row">
              <div class="col-lg-6">
                <table class="table text-sm">
                  <tbody>
                    <tr>
                      <th class="text-uppercase font-weight-normal border-0">Product #</th>
                      <td class="text-muted border-0">Lorem ipsum dolor sit amet</td>
                    </tr>
                    <tr>
                      <th class="text-uppercase font-weight-normal ">Available packaging</th>
                      <td class="text-muted ">LOLDuis aute irure dolor in reprehenderit</td>
                    </tr>
                    <tr>
                      <th class="text-uppercase font-weight-normal ">Weight</th>
                      <td class="text-muted ">dolor sit amet</td>
                    </tr>
                    <tr>
                      <th class="text-uppercase font-weight-normal ">Sunt in culpa qui</th>
                      <td class="text-muted ">Lorem ipsum dolor sit amet</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="col-lg-6">
                <table class="table text-sm">
                  <tbody>
                    <tr>
                      <th class="text-uppercase font-weight-normal border-0">Weight</th>
                      <td class="text-muted border-0">dolor sit amet                                </td>
                    </tr>
                    <tr>
                      <th class="text-uppercase font-weight-normal ">Sunt in culpa qui</th>
                      <td class="text-muted ">Lorem ipsum dolor sit amet                                </td>
                    </tr>
                    <tr>
                      <th class="text-uppercase font-weight-normal ">Product #</th>
                      <td class="text-muted ">Lorem ipsum dolor sit amet                                </td>
                    </tr>
                    <tr>
                      <th class="text-uppercase font-weight-normal ">Available packaging</th>
                      <td class="text-muted ">LOLDuis aute irure dolor in reprehenderit                                </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div id="reviews" role="tabpanel" class="tab-pane">
            <div class="row mb-5">
              <div class="col-lg-10 col-xl-9">
                <div class="media review">
                  <div class="text-center mr-4 mr-xl-5"><img src="/img/person-1.jpg" alt="Han Solo" class="review-image"><span class="text-uppercase text-muted">Dec 2018</span></div>
                  <div class="media-body">
                    <h5 class="mt-2 mb-1">Han Solo</h5>
                    <div class="mb-2"><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i>
                    </div>
                    <p class="text-muted">One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections     </p>
                  </div>
                </div>
                <div class="media review">
                  <div class="text-center mr-4 mr-xl-5"><img src="/img/person-2.jpg" alt="Luke Skywalker" class="review-image"><span class="text-uppercase text-muted">Dec 2018</span></div>
                  <div class="media-body">
                    <h5 class="mt-2 mb-1">Luke Skywalker</h5>
                    <div class="mb-2"><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-gray-200"></i>
                    </div>
                    <p class="text-muted">The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. &quot;What's happened to me?&quot; he thought. It wasn't a dream.     </p>
                  </div>
                </div>
                <div class="media review">
                  <div class="text-center mr-4 mr-xl-5"><img src="/img/person-3.jpg" alt="Princess Leia" class="review-image"><span class="text-uppercase text-muted">Dec 2018</span></div>
                  <div class="media-body">
                    <h5 class="mt-2 mb-1">Princess Leia</h5>
                    <div class="mb-2"><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-gray-200"></i><i class="fa fa-xs fa-star text-gray-200"></i>
                    </div>
                    <p class="text-muted">His room, a proper human room although a little too small, lay peacefully between its four familiar walls. A collection of textile samples lay spread out on the table.     </p>
                  </div>
                </div>
                <div class="media review">
                  <div class="text-center mr-4 mr-xl-5"><img src="/img/person-4.jpg" alt="Jabba Hut" class="review-image"><span class="text-uppercase text-muted">Dec 2018</span></div>
                  <div class="media-body">
                    <h5 class="mt-2 mb-1">Jabba Hut</h5>
                    <div class="mb-2"><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i><i class="fa fa-xs fa-star text-warning"></i>
                    </div>
                    <p class="text-muted">Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.     </p>
                  </div>
                </div>
                <div class="py-5 px-3">
                  <h5 class="text-uppercase mb-4">Leave a review</h5>
                  <form id="contact-form" method="post" action="contact.php" class="form">
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="name" class="form-label">Your name *</label>
                          <input type="text" name="name" id="name" placeholder="Enter your name" required="required" class="form-control">
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                          <label for="rating" class="form-label">Your rating *</label>
                          <select name="rating" id="rating" class="custom-select focus-shadow-0">
                            <option value="5">&#9733;&#9733;&#9733;&#9733;&#9733; (5/5)</option>
                            <option value="4">&#9733;&#9733;&#9733;&#9733;&#9734; (4/5)</option>
                            <option value="3">&#9733;&#9733;&#9733;&#9734;&#9734; (3/5)</option>
                            <option value="2">&#9733;&#9733;&#9734;&#9734;&#9734; (2/5)</option>
                            <option value="1">&#9733;&#9734;&#9734;&#9734;&#9734; (1/5)</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="email" class="form-label">Your email *</label>
                      <input type="email" name="email" id="email" placeholder="Enter your  email" required="required" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="review" class="form-label">Review text *</label>
                      <textarea rows="4" name="review" id="review" placeholder="Enter your review" required="required" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-outline-dark">Post review</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> --}}
    

@endsection