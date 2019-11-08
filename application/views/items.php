<table class="table table-bordered" >
	<thead>
		<th>Наименование товара</th>
		<th>Количество в наличии</th>
		<th>Цена в <a class="modgl" onclick="price_rub();">RUB</a> или <a class="modgl" onclick="price_dlr();">USD</a></th>
	</thead>
	<tbody>
<? if(count($items)): foreach($items as $item): ?>
		<tr>
			
			<td class="modgl"><a class="itemlink" href="<? echo '/item/'.$item->id; ?>"><? echo empty($item->iconurl) ? '' : '<img class="iconurl" src="'.$item->iconurl.'" alt="'.$item->name.'"/>'; ?><? echo $item->name; ?></a></td>
			<td data-id="<? echo $item->count == "Файл" ? "" : $item->id ;?>"><? echo $item->count; ?></td>
			<td class="rubprice"><? echo $item->price_rub; ?> RUB за 1 шт.</td>
			<td class="dlrprice" style="display:none"><? echo $item->price_dlr; ?> USD за 1 шт.</td>
		</tr>
<? endforeach; ?>
<? else: ?>
	<tr>
		<td colspan="3">Товары отсутствуют</td>
	</tr>
<? endif; ?>
	</tbody>
</table>