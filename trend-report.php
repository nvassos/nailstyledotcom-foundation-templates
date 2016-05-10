<?php $page = 'trends'; include('tmpl/header.php'); ?>
  <div id="page-content">
    <div class="row">
      <div class="medium-12 columns">
        <h1 class="page-title">
            <span>Trend</span>
            Report
          <div class="clearfix"></div>
        </h1>
      </div>
    </div>

    <div class="row trends-wrapper">
      
      <div class="medium-3 columns show-for-small-only">
        
        <select name="">
          <option value="">December 2015</option>
          <option value="">November 2015</option>
          <option value="">October 2015</option>
          <option value="">September 2015</option>
          <option value="">August 2015</option>
          <option value="">July 2015</option>
          <option value="">June 2015</option>
          <option value="">April 2015</option>
          <option value="">March 2015</option>
          <option value="">February 2015</option>
          <option value="">January 2015</option>
        </select>
        
      </div><!--.columns-->
      
      <div class="medium-9 columns">
        
        <div class="trend-report">
      
          <h1>October 2015</h1>
          <h2>Pumpkin Spice</h2>
          
          <article class="row">
          
            <div class="feature columns medium-5">
              <img src="img/trend1.jpg">
            </div>
            <div class="text columns medium-7">
              <h1>Celebrity Style</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            
          </article>
          
          <article class="row even">
          
            <div class="text columns medium-7">
              <h1>Celebrity Style</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a diam lectus. Sed sit amet ipsum mauris. Maecenas congue ligula ac quam viverra nec consectetur ante hendrerit. Donec et mollis dolor. Praesent et diam eget libero egestas mattis sit amet vitae augue. Nam tincidunt congue enim, ut porta lorem lacinia consectetur. Donec ut libero sed arcu vehicula ultricies a non tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              <p class="source">- Natasja Keijzer</p>
            </div>
            <div class="feature columns medium-5">
              <img src="img/trend2.jpg">
              <div class="caption">Photo by Natasja Keijzer</div>
            </div>
            
          </article>
          
        </div><!--.trend-report-->
          
      </div><!--.columns-->
      
      <div class="medium-3 columns show-for-medium-up" id="date-slider-wrapper">
        
        <div id="slider-vertical"></div>
        
      </div><!--.columns-->
    
    </div>
    
  </div>
<?php include('tmpl/footer.php'); ?>
