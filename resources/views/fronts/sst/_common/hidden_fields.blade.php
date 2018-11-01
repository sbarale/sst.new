<input id="city" name="city" type="hidden" value=""/>
<input type="hidden" id="adid" name="adid" value="{{$adid}}"/>
<input type="hidden" id="kwid" name="kwid" value="{{$kwid}}"/>
<input id="leadid_token" name="universal_leadid" type="hidden" value=""/>
<input type="hidden" name="click_id" id="click_id" value="{{$click_id}}"/>
<input type="hidden" name="sub_id" id="sub_id" value="{{$sub_id}}"/>
<input type="hidden" name="lp_request_id" id="sub_id" value="{{$lp_request_id}}"/>
<input type="hidden" id="debug" name="debug" value="{{$debug}}">
<input type="hidden" id="dev" name="dev" value="{{$dev}}">
<input type="hidden" id="is_test" name="is_test" value="{{$test}}">
{{ csrf_field() }}
