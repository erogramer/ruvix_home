<style type="text/css">
	.pagemenu-toggle {
		margin-right: 8px;
	}
	.pagemenu-tooltip {
		margin-bottom: 10px;
	}
	.pagemenu-tooltip-hide {
		margin-left: 12px;
		font-weight: bold;
		text-decoration: underline;
	}
</style>
<?php $pagemenu_js_alert_message = $this->session->flashdata('js_alert_message'); ?>
<?php if ($pagemenu_js_alert_message): ?>
<script type="text/javascript">
alert('<?php echo addslashes($pagemenu_js_alert_message); ?>');
</script>
<?php endif; ?>
<div class="box">
	<div class="box-table">
		<?php
		echo show_alert_message($this->session->flashdata('message'), '<div class="alert alert-auto-close alert-dismissible alert-info"><button type="button" class="close alertclose" >&times;</button>', '</div>');
		$attributes = array('class' => 'form-horizontal', 'name' => 'flist', 'id' => 'flist');
		echo form_open(current_full_url(), $attributes);
		?>
			<div class="box-table-header">
				<?php
				ob_start();
				?>
					<div class="btn-group pull-right" role="group" aria-label="...">
						<button type="button" class="btn btn-outline btn-default btn-sm btn-list-update btn-list-selected disabled" data-list-update-url = "<?php echo element('list_update_url', $view); ?>" >선택수정</button>
						<button type="button" class="btn btn-outline btn-default btn-sm btn-list-delete btn-list-selected disabled" data-list-delete-url = "<?php echo element('list_delete_url', $view); ?>" >선택삭제</button>
					</div>
				<?php
				$buttons = ob_get_contents();
				ob_end_flush();
				?>
				<div class="row">전체 : <?php echo element('total_rows', element('data', $view), 0); ?>건</div>
			</div>
			<div id="pagemenuTooltip" class="alert alert-info alert-dismissible pagemenu-tooltip" style="display:none;">
				<button type="button" class="close" aria-label="닫기">&times;</button>
				<span class="fa fa-info-circle"></span>
				하위 메뉴가 있는 항목은 아래 <strong>링크주소</strong> 칸 왼쪽의 <strong>[메뉴명 하위메뉴보기]</strong> 버튼을 클릭하면 펼치거나 접을 수 있습니다.
				<a href="#" id="pagemenuTooltipHide" class="pagemenu-tooltip-hide">다시 보지 않기</a>
			</div>
			<div class="table-responsive">
				<table class="table table-hover table-striped">
					<thead>
						<tr>
							<th>메뉴명</th>
							<th>새창여부</th>
							<th>커스텀(a 태그안)</th>
							<th>순서</th>
							<th>PC 사용</th>
							<th>모바일 사용</th>
							<th><input type="checkbox" name="chkall" id="chkall" /></th>
						</tr>
					</thead>
					<tbody>
					<?php
					if (element('list', element('data', $view))) {
						foreach (element('list', element('data', $view)) as $result) {
							$men_depth = (int) element('depth', $result);
							$men_rowclass = $men_depth === 0 ? 'success' : 'warning';
							$men_indent = $men_depth > 0 ? str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;', $men_depth) . str_repeat('<span class="fa fa-arrow-right"></span> ', $men_depth) : '';
							$men_indent_spacing = $men_depth > 0 ? str_repeat('&nbsp;&nbsp;&nbsp;&nbsp;', $men_depth) : '';
							$men_id = element(element('primary_key', $view), $result);
							$men_parent_id = (int) element('men_parent', $result);
					?>
						<tr class="pagemenu-item-row <?php echo $men_rowclass; ?>" data-men-id="<?php echo html_escape($men_id); ?>" data-men-parent="<?php echo html_escape($men_parent_id); ?>" data-men-depth="<?php echo $men_depth; ?>">
							<td>
								<div class="form-group form-group-sm form-inline">
									<?php echo $men_indent; ?>
									<input type="text" name="men_name[<?php echo html_escape($men_id); ?>]" class="form-control input-sm pagemenu-men-name" value="<?php echo html_escape(element('men_name', $result)); ?>" />
								</div>
							</td>
							<td>
								<div class="form-group form-group-sm">
									<select name="men_target[<?php echo element(element('primary_key', $view), $result); ?>]" class="form-control input-sm">
										<option value="" <?php echo ( ! element('men_target', $result)) ? 'selected="selected"' : ''; ?>>현재창</option>
										<option value="_blank" <?php echo (element('men_target', $result) === '_blank') ? 'selected="selected"' : ''; ?>>새창</option>
									</select>
								</div>
							</td>
							<td>
								<div class="form-group form-group-sm">
									<input type="text" name="men_custom[<?php echo element(element('primary_key', $view), $result); ?>]" class="form-control input-sm" value="<?php echo html_escape(element('men_custom', $result)); ?>" />
								</div>
							</td>
							<td>
								<div class="form-group form-group-sm">
									<input type="number" name="men_order[<?php echo element(element('primary_key', $view), $result); ?>]" class="form-control input-sm" value="<?php echo html_escape(element('men_order', $result)); ?>" />
								</div>
							</td>
							<td>
								<div class="form-group form-group-sm">
									<select name="men_desktop[<?php echo element(element('primary_key', $view), $result); ?>]" class="form-control input-sm">
										<option value="1" <?php echo (element('men_desktop', $result) === '1') ? 'selected="selected"' : ''; ?>>사용함</option>
										<option value="0" <?php echo (element('men_desktop', $result) !== '1') ? 'selected="selected"' : ''; ?>>사용안함</option>
									</select>
								</div>
							</td>
							<td>
								<div class="form-group form-group-sm">
									<select name="men_mobile[<?php echo element(element('primary_key', $view), $result); ?>]" class="form-control input-sm">
										<option value="1" <?php echo (element('men_mobile', $result) === '1') ? 'selected="selected"' : ''; ?>>사용함</option>
										<option value="0" <?php echo (element('men_mobile', $result) !== '1') ? 'selected="selected"' : ''; ?>>사용안함</option>
									</select>
								</div>
							</td>
							<td>
								<div class="form-group form-group-sm">
									<input type="checkbox" name="chk[]" class="list-chkbox" value="<?php echo element(element('primary_key', $view), $result); ?>" />
								</div>
							</td>
						</tr>
						<tr class="pagemenu-link-row <?php echo $men_rowclass; ?>" data-men-id="<?php echo html_escape($men_id); ?>" data-men-parent="<?php echo html_escape($men_parent_id); ?>" data-men-depth="<?php echo $men_depth; ?>">
							<th>
								<?php echo $men_indent_spacing; ?>
								<button type="button" class="btn btn-outline btn-default btn-xs pagemenu-toggle" data-toggle-id="<?php echo html_escape($men_id); ?>" data-men-label="<?php echo html_escape(element('men_name', $result)); ?>" style="display:none;"><?php echo html_escape(element('men_name', $result)); ?> 하위메뉴보기</button>
								<div class="pull-right">링크주소</div>
							</th>
							<td colspan="6">
								<div class="form-group form-group-sm">
									<input type="text" name="men_link[<?php echo html_escape($men_id); ?>]" class="form-control input-sm" value="<?php echo html_escape(element('men_link', $result)); ?>" />
								</div>
							</td>
						</tr>
					<?php
						}
					}
					if ( ! element('list', element('data', $view))) {
					?>
						<tr>
							<td colspan="7" class="nopost">자료가 없습니다</td>
						</tr>
					<?php
					}
					?>
					</tbody>
				</table>
			</div>
		<?php echo form_close(); ?>
	</div>
	<div class="box-table">
		<div class="box-table-header">
			<h5>메뉴 추가</h5>
		</div>
		<?php
		echo validation_errors('<div class="alert alert-warning" role="alert">', '</div>');
		echo show_alert_message(element('alert_message', $view), '<div class="alert alert-auto-close alert-dismissible alert-info"><button type="button" class="close alertclose" >&times;</button>', '</div>');
		$attributes = array('class' => 'form-horizontal', 'name' => 'fadminwrite', 'id' => 'fadminwrite');
		echo form_open(current_full_url(), $attributes);
		?>
			<div class="table-responsive">
				<table class="table table-hover table-striped">
					<thead>
						<tr>
							<th>메뉴명</th>
							<th>메뉴위치</th>
							<th>새창여부</th>
							<th>커스텀(a 태그안)</th>
							<th>순서</th>
							<th>PC 사용</th>
							<th>모바일 사용</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
								<div class="form-group form-group-sm">
									<input type="text" name="men_name" class="form-control input-sm" value="" />
								</div>
							</td>
							<td>
								<div class="form-group form-group-sm">
									<select name="men_parent" class="form-control input-sm">
										<option value="0">최상위메뉴</option>
										<?php
										if (element('list', element('data', $view))) {
											foreach (element('list', element('data', $view)) as $result) {
												$men_depth = (int) element('depth', $result);
												$men_indent = str_repeat('　', $men_depth);
										?>
											<option value="<?php echo html_escape(element('men_id', $result)); ?>"><?php echo $men_indent; ?><?php echo html_escape(element('men_name', $result)); ?>의 하위메뉴</option>
										<?php
											}
										}
										?>
									</select>
								</div>
							</td>
							<td>
								<div class="form-group form-group-sm">
									<select name="men_target" class="form-control input-sm">
										<option value="">현재창</option>
										<option value="_blank">새창</option>
									</select>
								</div>
							</td>
							<td>
								<div class="form-group form-group-sm">
									<input type="text" name="men_custom" class="form-control input-sm" value="" />
								</div>
							</td>
							<td>
								<div class="form-group form-group-sm">
									<input type="number" name="men_order" class="form-control input-sm" value="0" />
								</div>
							</td>
							<td>
								<div class="form-group form-group-sm">
									<select name="men_desktop" class="form-control input-sm">
										<option value="1">사용함</option>
										<option value="0">사용안함</option>
									</select>
								</div>
							</td>
							<td>
								<div class="form-group form-group-sm">
									<select name="men_mobile" class="form-control input-sm">
										<option value="1">사용함</option>
										<option value="0">사용안함</option>
									</select>
								</div>
							</td>
						</tr>
						<tr>
							<th class="pull-right">링크주소</th>
							<td colspan="6">
								<div class="form-group form-group-sm">
									<input type="text" name="men_link" class="form-control input-sm" value="" />
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="btn-group pull-right" role="group" aria-label="...">
				<button type="submit" class="btn btn-outline btn-success btn-sm">메뉴 추가하기</button>
			</div>
		<?php echo form_close(); ?>
	</div>
</div>

<script type="text/javascript">
//<![CDATA[
$(function() {
	$('#fadminwrite').validate({
		rules: {
			men_nemu: { required:true},
			men_link: { required:true}
		}
	});

	// 메뉴 목록 아코디언 : 하위 메뉴가 있는 항목에만 토글 버튼을 표시하고,
	// 클릭 시 직계 하위 메뉴(및 그 이하)를 접었다 펼쳤다 합니다.
	var $rows = $('#flist tr.pagemenu-item-row, #flist tr.pagemenu-link-row');
	var hasChildren = {};
	$rows.filter('.pagemenu-item-row').each(function() {
		var parentId = $(this).data('men-parent');
		if (parentId) {
			hasChildren[parentId] = true;
		}
	});

	function childRows(menId) {
		return $rows.filter(function() {
			return $(this).data('men-parent') == menId;
		});
	}

	function resetToggleButton(menId) {
		var $btn = $('.pagemenu-toggle[data-toggle-id="' + menId + '"]');
		$btn.text($btn.data('men-label') + ' 하위메뉴보기')
			.removeClass('btn-info')
			.addClass('btn-default');
	}

	function collapse(menId) {
		var $children = childRows(menId);
		$children.each(function() {
			var $child = $(this);
			if ($child.hasClass('pagemenu-item-row')) {
				var childId = $child.data('men-id');
				collapse(childId);
				resetToggleButton(childId);
			}
		});
		$children.hide();
	}

	// 하위 메뉴가 있는 항목에는 토글 버튼을 표시합니다. 초기 상태는 '접힘'입니다.
	var hasAnyChildren = false;
	$rows.filter('.pagemenu-link-row').each(function() {
		var menId = $(this).data('men-id');
		if (hasChildren[menId]) {
			hasAnyChildren = true;
			$(this).find('.pagemenu-toggle').show();
		}
	});

	// 최상위(depth 0)를 제외한 모든 하위 메뉴는 기본적으로 접어둡니다.
	$rows.filter('[data-men-depth!="0"]').hide();

	$('#flist').on('click', '.pagemenu-toggle', function() {
		var $btn = $(this);
		var menId = $btn.data('toggle-id');
		var menLabel = $btn.data('men-label');
		var $children = childRows(menId);
		var expanding = $children.first().is(':hidden');

		if (expanding) {
			$children.show();
			$btn.text(menLabel + ' 하위메뉴접기').removeClass('btn-default').addClass('btn-info');
		} else {
			collapse(menId);
			$btn.text(menLabel + ' 하위메뉴보기').removeClass('btn-info').addClass('btn-default');
		}
	});

	// 체크박스(선택수정 대상)는 메뉴명 행에 있지만 링크주소 등은 아래 행에 있어,
	// 값만 수정하고 체크박스 체크를 깜빡하면 '선택수정'을 눌러도 저장되지 않는 문제가 있었습니다.
	// 값을 수정하면 해당 행의 체크박스를 자동으로 체크해 이 문제를 방지합니다.
	$('#flist').on('input change', '.pagemenu-item-row input:not(.list-chkbox), .pagemenu-item-row select, .pagemenu-link-row input', function() {
		var $row = $(this).closest('tr');
		var menId = $row.data('men-id');
		var $checkbox = $('#flist input.list-chkbox[value="' + menId + '"]');
		if ($checkbox.length && ! $checkbox.prop('checked')) {
			$checkbox.prop('checked', true);
			$('.btn-list-update, .btn-list-selected').removeClass('disabled');
		}
	});

	// 아코디언 사용법 툴팁 : '다시 보지 않기'를 선택하면 쿠키에 저장하여 이후에는 표시하지 않습니다.
	function getCookie(name) {
		var match = document.cookie.match(new RegExp('(?:^|; )' + name + '=([^;]*)'));
		return match ? decodeURIComponent(match[1]) : null;
	}
	function setCookie(name, value, days) {
		var date = new Date();
		date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
		document.cookie = name + '=' + encodeURIComponent(value) + '; expires=' + date.toUTCString() + '; path=/';
	}

	var TOOLTIP_COOKIE_NAME = 'pagemenu_accordion_tooltip_hide';
	if (hasAnyChildren && ! getCookie(TOOLTIP_COOKIE_NAME)) {
		$('#pagemenuTooltip').show();
	}
	$('#pagemenuTooltip').on('click', '.close', function() {
		$('#pagemenuTooltip').hide();
	});
	$('#pagemenuTooltipHide').on('click', function(e) {
		e.preventDefault();
		setCookie(TOOLTIP_COOKIE_NAME, '1', 365);
		$('#pagemenuTooltip').hide();
	});
});
//]]>
</script>
