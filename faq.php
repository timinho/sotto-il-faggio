<div class="alert alert-warning mb-3">
  To reduce spending time with a phone and computer, we'd appreciate if you read the FAQ first before contacting us.
</div>

<div class="p-3">
<?php foreach($faqs[getLanguage()] as $faq) { ?>
<div>
  <div><h4 class="card-title"><?php echo $faq['q']?></h4></div>
  <div><p><?php echo $faq['a']?></p></div>
</div>
<?php } ?>
</div>
