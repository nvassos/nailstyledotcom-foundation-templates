<?php $page = 'collection'; include('tmpl/header.php'); ?>
  <div id="page-content">
    <div class="row">
      <div class="medium-12 columns">
        <h1 class="page-title">
            <span>Inspiration</span>
            Collections
          <div class="clearfix"></div>
        </h1>
      </div>
    </div>
    
    <div class="row">
      <div class="medium-12 columns">
        <div class="collection">
          <h2>Cool colors collection</h2>
          <div class="thumbs-wrapper">
            <div class="row">
              <div class="medium-5 columns feature">
                <a href=""><img src="img/dummy3.jpg"></a>
              </div>
              <div class="medium-7 columns">
                <ul class="thumbs">
                  <li><a href=""><img src="img/dummy4.jpg"></a></li>
                  <li><a href=""><img src="img/dummy4.jpg"></a></li>
                  <li><a href=""><img src="img/dummy4.jpg"></a></li>
                  <li><a href=""><img src="img/dummy4.jpg"></a></li>
                  <li><a href=""><img src="img/dummy4.jpg"></a></li>
                  <li><a href=""><img src="img/dummy4.jpg"></a></li>
                  <li><a href=""><img src="img/dummy4.jpg"></a></li>
                  <li><a href=""><img src="img/dummy4.jpg"></a></li>
                  <li><a href=""><img src="img/dummy4.jpg"></a></li>
                  <li><a href=""><img src="img/dummy4.jpg"></a></li>
                  <li><a href=""><img src="img/dummy4.jpg"></a></li>
                  <li><a href=""><img src="img/dummy4.jpg"></a></li>
                </ul>
              </div>
            </div>
            <a href="#" class="more">see more inspirations <i class="fa fa-caret-right"></i></a>
          </div>
        </div>
      </div>
    </div><!--.row-->
    
    <div class="row">
      <div class="medium-12 columns">
        <div class="collection edit">
          <button class="button delete-button">Delete</button>
          <h2>Cool colors collection</h2>
          <div class="thumbs-wrapper">
            <div class="row">
              <div class="medium-5 columns feature">
                <a href=""><img src="img/dummy3.jpg"></a>
                <div class="edit-property clearfix">
                  <label>Collection Name</label>
                  <input type="text" name="collection-xxx-name" value="Cool Colors Collection" readonly="readonly" class="name">
                  <i class="fa fa-pencil"></i>
                </div>
                <div class="edit-property clearfix">
                  <label>Cover Photo</label>
                  <input type="file" name="collection-xxx-photo" class="upload">
                </div>
              </div>
              <div class="medium-7 columns">
                <ul class="thumbs sortable">
                  <li class="ui-state-default"><a href=""><img src="img/dummy4.jpg"></a><div class="tint"></div><i class="fa fa-remove"></i><i class="fa fa-pencil"></i></li>
                  <li class="ui-state-default"><a href=""><img src="img/dummy4.jpg"></a><div class="tint"></div><i class="fa fa-remove"></i><i class="fa fa-pencil"></i></li>
                  <li class="ui-state-default"><a href=""><img src="img/dummy4.jpg"></a><div class="tint"></div><i class="fa fa-remove"></i><i class="fa fa-pencil"></i></li>
                  <li class="ui-state-default"><a href=""><img src="img/dummy4.jpg"></a><div class="tint"></div><i class="fa fa-remove"></i><i class="fa fa-pencil"></i></li>
                  <li class="ui-state-default"><a href=""><img src="img/dummy4.jpg"></a><div class="tint"></div><i class="fa fa-remove"></i><i class="fa fa-pencil"></i></li>
                  <li class="ui-state-default"><a href=""><img src="img/dummy4.jpg"></a><div class="tint"></div><i class="fa fa-remove"></i><i class="fa fa-pencil"></i></li>
                  <li class="ui-state-default"><a href=""><img src="img/dummy4.jpg"></a><div class="tint"></div><i class="fa fa-remove"></i><i class="fa fa-pencil"></i></li>
                  <li class="ui-state-default"><a href=""><img src="img/dummy4.jpg"></a><div class="tint"></div><i class="fa fa-remove"></i><i class="fa fa-pencil"></i></li>
                  <li class="ui-state-default"><a href=""><img src="img/dummy4.jpg"></a><div class="tint"></div><i class="fa fa-remove"></i><i class="fa fa-pencil"></i></li>
                  <li class="ui-state-default"><a href=""><img src="img/dummy4.jpg"></a><div class="tint"></div><i class="fa fa-remove"></i><i class="fa fa-pencil"></i></li>
                  <li class="ui-state-default"><a href=""><img src="img/dummy4.jpg"></a><div class="tint"></div><i class="fa fa-remove"></i><i class="fa fa-pencil"></i></li>
                  <li class="ui-state-default"><a href=""><img src="img/dummy4.jpg"></a><div class="tint"></div><i class="fa fa-remove"></i><i class="fa fa-pencil"></i></li>
                  <li class="ui-state-default"><a href=""><img src="img/dummy4.jpg"></a><div class="tint"></div><i class="fa fa-remove"></i><i class="fa fa-pencil"></i></li>
                  <li class="ui-state-default"><a href=""><img src="img/dummy4.jpg"></a><div class="tint"></div><i class="fa fa-remove"></i><i class="fa fa-pencil"></i></li>
                  <li class="ui-state-default"><a href=""><img src="img/dummy4.jpg"></a><div class="tint"></div><i class="fa fa-remove"></i><i class="fa fa-pencil"></i></li>
                  <li class="add"><a href="#"><i class="fa fa-plus"></i></a></li>
                </ul>
                <div class="instructions">Drag and drop to rearrange</div>
              </div>
            </div>
            <a href="#" class="more">see more inspirations <i class="fa fa-caret-right"></i></a>
            <button class="button save-button">Save</button>
        </div>
      </div>
    </div><!--.row-->

  </div><!-- end of #page-content -->

<?php include('tmpl/footer.php'); ?>
