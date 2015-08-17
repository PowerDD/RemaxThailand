<input type="hidden" id="screen_action" value="{$screen_action}">
<input type="hidden" id="referer" value="{$referer}">

{if $screen_action == 'register'}
	<div class="pinBox pinWell padding-10">
		<h1 class="page-header font-28 margin-top-10">สมัครสมาชิก</h1>
		<div class="row">
			<div id="dv-loading" class="col-sm-12 hidden">
				<div class="alert alert-info text-center" role="alert"><img src="https://src.24fin.com/images/gif/loader.gif"> กำลังบันทึกข้อมูล... กรุณารอสักครู่ค่ะ</div>
			</div>
			<div id="dv-success" class="col-sm-12 hidden">
				<div class="alert alert-info text-center" role="alert"><i class="fa fa-quote-left"></i> ขอบคุณที่ให้ความสนใจ กรุณาตรวจสอบข้อมูลเพิ่มทางอีเมล์ <b id="b_email"></b> ค่ะ <i class="fa fa-quote-right"></i></div>
			</div>

			<div class="col-sm-3 dv-input">
				<img class="img-responsive" src="https://src.24fin.com/images/remaxthailand/register-01.png">
			</div>
			<div class="col-sm-9 dv-input">
				<form id="fm-register" role="form" class="dv dv-manual form-horizontal" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="msg" class="col-sm-2 control-label">ชื่อ - นามสกุล <small><i class="fa fa-asterisk color-red small"></i></small></label>
						<div class="col-sm-9">
							<input type="text" class="form-control required" id="txt-name" name="name" placeholder="ชื่อ - นามสกุล" required>
						</div>
					</div>
					<div class="form-group">
						<label for="msg" class="col-sm-2 control-label">อีเมล <small><i class="fa fa-asterisk color-red small"></i></small></label>
						<div class="col-sm-9">
							<input type="text" class="form-control required" id="txt-email" name="email" placeholder="กรุณากรอกอีเมล เพื่อรับสิทธิประโยชน์ และโปรโมชั่นต่างๆ" required>
							<div class="help-inline text-danger hidden">มีอีเมลนี้ในระบบแล้ว กรุณาใช้อีเมลใหม่ค่ะ</div>
						</div>
					</div>
					<div class="form-group">
						<label for="msg" class="col-sm-2 control-label">เบอร์มือถือ <small><i class="fa fa-asterisk color-red small"></i></small></label>
						<div class="col-sm-9">
							<input type="text" class="form-control required" id="txt-mobile" name="mobile" placeholder="กรุณากรอกเบอร์มือถือ เพื่อรับสิทธิประโยชน์ และโปรโมชั่นต่างๆ" required>
							<div class="help-inline text-danger hidden">มีเบอร์มือถือนี้ในระบบแล้ว กรุณาใช้เบอร์มือถือใหม่ค่ะ</div>
						</div>
					</div>
					<div class="form-group">
						<label for="msg" class="col-sm-2 control-label">ไอดี Line</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="txt-line" placeholder="กรุณากรอกไอดี Line เพื่อรับสิทธิประโยชน์ และโปรโมชั่นต่างๆ">
							<div class="help-inline text-danger hidden">มี ไอดี Line นี้ในระบบแล้ว กรุณาใช้ ไอดี Line ใหม่ค่ะ</div>
						</div>
					</div>
					<div class="form-group">
						<label for="msg" class="col-sm-2 control-label">จังหวัด <small><i class="fa fa-asterisk color-red small"></i></small></label>
						<div class="col-sm-9">
							<select  class="form-control" id="province">
								{section name=idx loop=$province.name}
									<option value="{$province.id[idx]}"{if $province.id[idx] == '1'} selected{/if}>{$province.name[idx]}</option>
								{/section}
							</select>
						</div>
					</div>
					<div class="form-group dv-button">
						<label for="msg" class="col-sm-2 control-label"></label>
						<div class="col-sm-9">
							<div class="line"></div>
						</div>
					</div>				
					<div class="form-group dv-button">
						<label for="msg" class="col-sm-2 control-label"></label>
						<div class="col-sm-9">
							<button type="button" class="btn btn-warning pull-right" id="btn-register" data-step="4">สมัคร Dealer <i class="fa fa-chevron-right"></i></button>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="clearfix"></div>
				</form>
			</div>
		</div>
	</div>
{else if $screen_action == 'information'}
	<div class="pinBox pinWell padding-10">
		<h1 class="page-header font-28 margin-top-10">สวัสดีค่ะ คุณ{$member.name[0]} {$member.lastname[0]}</h1>
		<div class="row">
			<div id="dv-loading" class="col-sm-12 hidden">
				<div class="alert alert-info text-center" role="alert"><img src="https://src.24fin.com/images/gif/loader.gif"> กำลังบันทึกข้อมูล... กรุณารอสักครู่ค่ะ</div>
			</div>

			<div class="col-sm-3">
				<img class="img-responsive step-1" src="https://src.24fin.com/images/remaxthailand/register-02.png">
				<img class="img-responsive step-2 hidden" src="https://src.24fin.com/images/remaxthailand/register-03.png">
				<img class="img-responsive step-3 hidden" src="https://src.24fin.com/images/remaxthailand/register-04.png">
				<img class="img-responsive step-4 hidden" src="https://src.24fin.com/images/remaxthailand/register-05.png">
			</div>
			<div class="col-sm-9">
				<form id="fm-register" role="form" class="dv dv-manual form-horizontal" method="post" enctype="multipart/form-data">
					<div class="form-group step-1">
						<label for="msg" class="col-sm-2 control-label">ชื่อผู้ใช้ <small><i class="fa fa-asterisk color-red small"></i></small></label>
						<div class="col-sm-9">
							<input type="text" class="form-control required" id="txt-username" placeholder="Username" required data-checked="0" data-exist="0">
							<div class="help-inline text-danger hidden">มีชื่อผู้ใช้นี้ในระบบแล้ว กรุณาใช้ชื่อใหม่ค่ะ</div>
						</div>
						<input type="hidden" id="member_ref" name="member_ref" value="{$member_ref}">
						<input type="hidden" id="member_id" name="member_id" value="">
					</div>
					<div class="form-group step-1">
						<label for="msg" class="col-sm-2 control-label">รหัสผ่าน <small><i class="fa fa-asterisk color-red small"></i></small></label>
						<div class="col-sm-9">
							<input type="password" class="form-control required" id="txt-password" name="txt-password" placeholder="Password" required>
						</div>
					</div>
					<div class="form-group step-1">
						<label for="msg" class="col-sm-2 control-label">ยืนยันรหัสผ่าน <small><i class="fa fa-asterisk color-red small"></i></small></label>
						<div class="col-sm-9">
							<input type="password" class="form-control required" id="txt-password2" placeholder="กรอก Password อีกครั้ง" required>
							<div class="help-inline text-danger hidden">กรุณากรอกรหัสผ่านให้ตรงกันค่ะ</div>
						</div>
					</div>
					<div class="form-group step-2 hidden">
						<label for="msg" class="col-sm-2 control-label">ชื่อร้าน <small><i class="fa fa-asterisk color-red small"></i></small></label>
						<div class="col-sm-9">
							<input type="text" class="form-control required" id="txt-shop" placeholder="ชื่อร้าน" required>
						</div>
					</div>
					<div class="form-group step-2 hidden">
						<label for="msg" class="col-sm-2 control-label">ที่อยู่ <small><i class="fa fa-asterisk color-red small"></i></small></label>
						<div class="col-sm-9">
							<input type="text" class="form-control required" id="txt-address" placeholder="ที่อยู่ในการจัดส่งสินค้า" required>
						</div>
					</div>
					<div class="form-group step-2 hidden">
						<label for="msg" class="col-sm-2 control-label"></label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="txt-address2" placeholder="ที่อยู่ (เพิ่มเติม)">
						</div>
					</div>
					<div class="form-group step-2 hidden">
						<label for="msg" class="col-sm-2 control-label">จังหวัด</label>
						<div class="col-sm-9">
							<select  class="form-control" id="province">
								{section name=idx loop=$province.name}
									<option value="{$province.id[idx]}"{if $province.id[idx] == $member.province[0]} selected{/if}>{$province.name[idx]}</option>
								{/section}
							</select>
						</div>
					</div>
					<div class="form-group step-2 hidden">
						<label for="msg" class="col-sm-2 control-label">เขต/อำเภอ</label>
						<div class="col-sm-9">
							<select  class="form-control" id="district">
								{section name=idx loop=$district.name}
									<option value="{$district.id[idx]}" data-zip="{$district.zipCode[idx]}"{if $district.id[idx] == '1'} selected{/if}>{$district.name[idx]}</option>
								{/section}
							</select>
						</div>
					</div>
					<div class="form-group step-2 hidden">
						<label for="msg" class="col-sm-2 control-label">แขวง/ตำบล <small><i class="fa fa-asterisk color-red small"></i></small></label>
						<div class="col-sm-9">
							<input type="text" class="form-control required" id="txt-sub_district" placeholder="ตำบล" required>
						</div>
					</div>
					<div class="form-group step-2 hidden">
						<label for="msg" class="col-sm-2 control-label">รหัสไปรษณีย์ <small><i class="fa fa-asterisk color-red small"></i></small></label>
						<div class="col-sm-9">
							<input type="text" class="form-control required" id="txt-zipcode" placeholder="รหัสไปรษณีย์" required maxlength="5">
						</div>
					</div>
					<div class="form-group step-3 hidden">
						<label for="msg" class="col-sm-2 control-label">ภาพหน้าร้าน</label>
						<div class="col-sm-9">
							<div class="input-group">
								<input type="text" class="form-control" id="img1" name="img1" placeholder="" disabled>
								<div class="input-group-addon btn btn-primary btn-browse" data-name="1">เลือกไฟล์ ...</div>
								<input class="hidden file" type="file" id="file1" name="file1">
							</div>
						</div>
					</div>
					<div class="form-group step-3 hidden">
						<label for="msg" class="col-sm-2 control-label">ภาพหน้าร้าน</label>
						<div class="col-sm-9">
							<div class="input-group">
								<input type="text" class="form-control" id="img2" name="img2" placeholder="" disabled>
								<div class="input-group-addon btn btn-primary btn-browse" data-name="2">เลือกไฟล์ ...</div>
								<input class="hidden file" type="file" id="file2" name="file2">
							</div>
						</div>
					</div>
					<div class="form-group step-3 hidden">
						<label for="msg" class="col-sm-2 control-label">ภาพในร้าน</label>
						<div class="col-sm-9">
							<div class="input-group">
								<input type="text" class="form-control" id="img3" name="img3" placeholder="" disabled>
								<div class="input-group-addon btn btn-primary btn-browse" data-name="3">เลือกไฟล์ ...</div>
								<input class="hidden file" type="file" id="file3" name="file3">
							</div>
						</div>
					</div>
					<div class="form-group step-3 hidden">
						<label for="msg" class="col-sm-2 control-label">ภาพในร้าน</label>
						<div class="col-sm-9">
							<div class="input-group">
								<input type="text" class="form-control" id="img4" name="img4" placeholder="" disabled>
								<div class="input-group-addon btn btn-primary btn-browse" data-name="4">เลือกไฟล์ ...</div>
								<input class="hidden file" type="file" id="file4" name="file4">
							</div>
						</div>
					</div>
					<div class="form-group step-4 hidden margin-bottom-0">
						<label for="msg" class="col-sm-2"></label>
						<label for="msg" class="col-sm-10 question1">คุณเคยทำธุรกิจ Accessories หรือไม่</label>
					</div>
					<div class="form-group step-4 hidden">
						<label for="msg" class="col-sm-2 control-label"></label>
						<div class="col-sm-1"></div>
						<div class="col-sm-9">
							<label class="radio-inline">
								<input type="radio" name="rd-exp" id="exp-y" value="1"> เคย
							</label>
							<label class="radio-inline">
								<input type="radio" name="rd-exp" id="exp-n" value="0" checked> ไม่เคย
							</label>
						</div>
					</div>
					<div class="form-group step-4 hidden">
						<label for="msg" class="col-sm-2 control-label"></label>
						<div class="col-sm-9">
							<div class="line"></div>
						</div>
					</div>
					<div class="form-group step-4 hidden margin-bottom-0">
						<label for="msg" class="col-sm-2"></label>
						<label for="msg" class="col-sm-10 question2">ประเภทธุรกิจ</label>
					</div>
					<div class="form-group step-4 hidden">
						<label for="msg" class="col-sm-2 control-label"></label>
						<div class="col-sm-1"></div>
						<div class="col-sm-9">
							<label class="checkbox-inline">
								<input type="checkbox" id="cb-wholesale" value="ws"> ขายส่ง
							</label>
							<label class="checkbox-inline">
								<input type="checkbox" id="cb-retail" value="rt" > ขายปลีก
							</label>
							<label class="checkbox-inline">
								<input type="checkbox" id="cb-online" value="ol" > ขายออนไลน์
							</label>
						</div>
					</div>
					<div class="form-group step-4 hidden">
						<label for="msg" class="col-sm-2 control-label"></label>
						<div class="col-sm-9">
							<div class="line"></div>
						</div>
					</div>	
					<div class="form-group step-4 hidden margin-bottom-0">
						<label for="msg" class="col-sm-2"></label>
						<label for="msg" class="col-sm-10 question3">คุณต้องการรับทราบข่าวสารผ่านทางวิธีใด</label>
					</div>
					<div class="form-group step-4 hidden">
						<label for="msg" class="col-sm-2 control-label"></label>
						<div class="col-sm-1"></div>
						<div class="col-sm-9">
							<label class="checkbox-inline">
								<input type="checkbox" id="cb-line" value="ln" > Line
							</label>
							<label class="checkbox-inline">
								<input type="checkbox" id="cb-email" value="em"> อีเมล
							</label>
							<label class="checkbox-inline">
								<input type="checkbox" id="cb-facebook" value="fb" > Facebook
							</label>
						</div>
					</div>
					<div class="form-group dv-button">
						<label for="msg" class="col-sm-2 control-label"></label>
						<div class="col-sm-9">
							<div class="line"></div>
						</div>
					</div>				
					<div class="form-group dv-button">
						<label for="msg" class="col-sm-2 control-label"></label>
						<div class="col-sm-9">
							<button type="button" class="btn btn-default pull-left hidden" id="btn-previous" data-step="2"><i class="fa fa-chevron-left"></i> ย้อนกลับ </button>
							<button type="button" class="btn btn-warning pull-right" id="btn-next" data-step="1">ขั้นตอนต่อไป <i class="fa fa-chevron-right"></i></button>
							<button type="button" class="btn btn-warning pull-right hidden" id="btn-register" data-step="4">สมัครตัวแทนจำหน่าย <i class="fa fa-chevron-right"></i></button>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="clearfix"></div>
				</form>
			</div>
		</div>
	</div>
{else if $screen_action == 'upload'}
	<input type="hidden" id="image_list" value="{$image_list}">
	<input type="hidden" id="member_id" value="{$member_id}">
	<div class="pinBox pinWell padding-10">
		<h1 class="page-header font-28 margin-top-10">สวัสดีค่ะ คุณ{$member.name[0]} {$member.lastname[0]}</h1>
		<div class="row">
			<div id="dv-loading" class="col-sm-12">
				<div class="alert alert-info text-center" role="alert"><img src="https://src.24fin.com/images/gif/loader.gif"> กำลังบันทึกข้อมูล... กรุณารอสักครู่ค่ะ</div>
			</div>
			<div id="dv-success" class="col-sm-12 hidden">
				<div class="alert alert-info text-center" role="alert"><i class="fa fa-quote-left"></i> ขอบคุณที่กรอกข้อมูลเพิ่มเติม กรุณารอเจ้าหน้าที่อนุมัติ และติดต่อกลับค่ะ <i class="fa fa-quote-right"></i></div>
			</div>
		</div>
	</div>
{/if}