<h3><?php echo html_escape(element('doc_title', element('data', $view))); ?></h3>

<?php echo element('content', element('data', $view)); ?>

<?php if (element('doc_pdf_filename', element('data', $view))) { ?>
	<div class="document-pdf">
		<iframe src="<?php echo base_url('uploads/document/' . element('doc_pdf_filename', element('data', $view))); ?>" width="100%" height="800" frameborder="0"></iframe>
		<p><a href="<?php echo base_url('uploads/document/' . element('doc_pdf_filename', element('data', $view))); ?>" target="_blank"><?php echo html_escape(element('doc_pdf_originname', element('data', $view))); ?></a></p>
	</div>
<?php } ?>

<?php if ($this->member->is_admin() === 'super') { ?>
	<div class="pull-right">
		<a href="<?php echo admin_url('page/document/write/' . element('doc_id', element('data', $view))); ?>" class="btn btn-danger btn-sm" target="_blank">내용수정</a>
	</div>
<?php } ?>
