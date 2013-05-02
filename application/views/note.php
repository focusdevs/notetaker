			<div class="row-fluid">
				<div class="span12">
					<form id="note-form">
					<input type="hidden" value="1" id="owner" />
					<textarea id="note"></textarea>
					<select name="clients" id="clients">
						<?php foreach($clients as $client) { ?>
							<option value="<?=$client['id'];?>"><?=$client['domain'];?></option>
						<?php } ?>
					</select>
					<p><button class="btn btn-large btn-info add-btn">Add Note</button></p>
					</form>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
			<?php foreach($notes as $note) { ?>
			<div class="entry" id="<?=$note['id'];?>">
				<a href="<?=$note['id'];?>" class="delete-btn"><i class="icon-remove"></i></a>
				<p><?=urldecode($note['note']);?></p>
				<img src="http://colecode.com/focusmx/notes/img/owners/<?=$note['owner'];?>.jpg" class="owner" alt="" title="" />
			</div>
			<?php } ?>