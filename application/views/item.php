<div data-backdrop="false" class="modal fade" id="paymodal">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <h4 class="modal-title">Оплата</h4>
    </div>
    <div class="modal-body">
    <table class="paytable">
	  <tr>
		  <td>Товар:</td>
		  <td class="payitem">...</td>
	  </tr>
	  <tr>
		  <td>Количество:</td>
		  <td class="paycount">...</td>
	  </tr>
	  <tr>
		  <td>К оплате:</td>
		  <td class="payprice">...</td>
	  </tr>
	  <tr>
		  <td>Кошелек для платежа:</td>
		  <td id="copyfund" class="payfund"><b>...</b></td>
	  </tr>
	  <tr>
		  <td>Примечание к платежу:</td>
		  <td id="copybill" class="paybill"><b>...</b></td>
	  </tr>
	</table>
    </div>
	 <div id="keeperLink"></div>
	<div class="alert alert-danger">
		<strong>Обязательно</strong> переводите деньги именно с таким примечанием! <br />
		До конца оплаты <strong>не закрывайте данное окно</strong>!
	</div>
    <div class="payfoot modal-footer">
      <button type="button" onclick="" data-loading-text="Проверяем..." class="checkpaybtn btn btn-primary">Проверить</button>
    </div>
  </div>
</div>
</div>

<div class="panel">
	<div class="panel-heading ifullbody">
		<div class="panel-title" style="width:auto;display:inline-block"><?echo $item->name;?> | В наличии: <? echo $item->count;?> | <font color="orange">[<? echo $item->price_rub;?> RUB]</font> или <font color="orange">[<? echo $item->price_dlr;?> USD]</font> за 1 шт.</div>
	</div>
  <div class="panel-body">
	<? echo $item->descr; ?>
 </div>
</div>
  <div class="panel-body">
    <div class="row">
     <div class="col-lg-2" style="width:25%;">
         <? if (is_int($item->count)): ?>    
		 <label class="control-label" for="count">Количество:</label>		  
          <input type="text" class="form-control input-small" name="count" value ='1' onkeyup="this.value=this.value.replace(/[^0-9]/g, '')">	
		<? else: ?>
		<label class="control-label" for="count">Количество:</label>
		 <input type="text" class="form-control input-small" name="count" value ='1' readonly>	
     	 <? endif; ?>
	 </div>
        <div class="col-lg-2" style="width:25%;">
          <label class="control-label" for="funds">Оплата:</label>
          <select class="form-control input-small" name="funds">
              <? foreach($funds as $fund): ?>
              <option value="<? echo $fund['fundid']; ?>" data-fund="<? echo $fund['fundname']; ?>"><? echo $fund['fundname']; ?></option>
              <? endforeach; ?>
          </select>
        </div>
		<select class="form-control input-small" name="item" style='display:none'>
				<option value="<? echo $item->id; ?>" data-id="<? echo $item->id; ?>" data-min_order="<? echo $item->min_order; ?>" data-item_count="<? echo $item->count; ?>" selected></option>
			</select>
        <div class="col-lg-3" style="width:25%;">
          <label class="control-label" for="email">E-mail:</label>
          <input type="email" class="form-control input-small" placeholder='mail@domain.com' name="email">
        </div>
        <div class="col-lg-4" style="width:25%;">
          <button onclick="sendData();" type="button" class="btn btnbuy btn-primary btn-block">Купить</button>
        </div>
    </div>
  </div>
  <center>
  <a id="coupon" >Есть промо-код?</a>
  <div class="hide popover_content">
	<input type="text" class="input-small form-control" id="cpn_inp" value=''>
  </div>
  </center>
