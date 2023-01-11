<!-- Modal Photo -->
<div class="modal fade" id="PhotoModal" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body p-0" style="overflow:hidden"></div>
    </div>
  </div>
</div>

<!-- FAQ Photo -->
<div class="modal fade" id="FaqModal" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><?php echo getTranslation('heading_faq','Frequenty Asked Questions')?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body p-0" style="overflow:hidden">
        <?php include('faq.php') ?>
      </div>
    </div>
  </div>
</div>

<div style="height:50px"></div>
