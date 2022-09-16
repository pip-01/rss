<?php

echo "<html><head></head><body><h3>💋 rss rustler 💋</h3>";


echo '<div class="fb-form-header" id="fb-form-header1" style="min-height: 0px;">
    <a class="fb-link-logo" id="fb-link-logo1" target="_blank"><img title="Alternative text" class="fb-logo" id="fb-logo1" style="display: none;" alt="Alternative text" src="common/images/image_default.png"/></a>
  </div>
  <div class="section" id="section1">
    <div class="column ui-sortable" id="column1">
      <div class="fb-item fb-three-column fb-100-item-column" id="item1">
        <div class="fb-grouplabel">
          <label id="item1_label_0" style="display: inline;"><b>News</b></label>
        </div>
        <div class="fb-checkbox">
          <label id="item1_0_label"><input name="News[]" id="item1_0_checkbox" type="checkbox" data-hint="" value="Stuff" /><span class="fb-fieldlabel" id="item1_0_span">Stuff</span></label>
          <label id="item1_1_label"><input name="News[]" id="item1_1_checkbox" type="checkbox" value="RNZ" /><span class="fb-fieldlabel" id="item1_1_span">RNZ</span></label>
          <label id="item1_2_label"><input name="News[]" id="item1_2_checkbox" type="checkbox" value="Google News" /><span class="fb-fieldlabel" id="item1_2_span">Google News</span></label>
        </div>
      </div>
      <div class="fb-item fb-three-column fb-100-item-column" id="item2">
        <div class="fb-grouplabel">
          <label id="item2_label_0" style="display: inline;"><b>UXD</b></label>
        </div>
        <div class="fb-checkbox">
          <label id="item2_0_label"><input name="checkbox2[]" id="item2_0_checkbox" type="checkbox" data-hint="" value="Mind the product" /><span class="fb-fieldlabel" id="item2_0_span">Mind the product</span></label>
          <label id="item2_1_label"><input name="checkbox2[]" id="item2_1_checkbox" type="checkbox" value="Nielsen" /><span class="fb-fieldlabel" id="item2_1_span">Nielsen</span></label>
          <label id="item2_2_label"><input name="checkbox2[]" id="item2_2_checkbox" type="checkbox" value="UX Planet" /><span class="fb-fieldlabel" id="item2_2_span">UX Planet</span></label>
        </div>
      </div>
      <div class="fb-item fb-three-column fb-100-item-column" id="item4">
        <div class="fb-grouplabel">
          <label id="item4_label_0" style="display: inline;"><b>Future</b></label>
        </div>
        <div class="fb-checkbox">
          <label id="item4_0_label"><input name="Future[]" id="item4_0_checkbox" type="checkbox" data-hint="" value="Check 1" /><span class="fb-fieldlabel" id="item4_0_span">Check 1</span></label>
          <label id="item4_1_label"><input name="Future[]" id="item4_1_checkbox" type="checkbox" value="The Verge" /><span class="fb-fieldlabel" id="item4_1_span">The Verge</span></label>
          <label id="item4_2_label"><input name="Future[]" id="item4_2_checkbox" type="checkbox" value="Trend Hunter" /><span class="fb-fieldlabel" id="item4_2_span">Trend Hunter</span></label>
        </div>
      </div>
    </div>
  </div>';


function callFeed($rss_name, $rss_link) {

	$content = file_get_contents($rss_link);
	// Instantiate XML element
	$a = new SimpleXMLElement($content);

	echo "<h3>$rss_name</h3><ul>";
   
	foreach($a->channel->item as $entry) {
	echo "<li><a href='$entry->link' title='$entry->title'>" . $entry->title . "</a></li>";
    }
	echo "<br>"; 
}

callFeed("Stuff", "https://www.stuff.co.nz/rss");
echo "</ul>";
callFeed("Mind the product", "http://www.mindtheproduct.com/feed/");
echo "</ul>";


    

echo "</body></html>";


?>