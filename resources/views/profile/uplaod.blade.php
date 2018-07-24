@extends('profile.home')
@section('admin_content')
<style>
  .bgColor {
    max-width: 400px;
    height: 400px;
    background-color: #DBD1D1;
    padding: 30px;
    border-radius: 4px;
  text-align: center;    
}
#targetOuter{ 
  position:relative;
    text-align: center;
    background-color: #F0E8E0;
    margin: 20px auto;
    width: 200px;
    height: 200px;
  border-radius: 4px;
}
.btnSubmit {
    background-color: #565656;
    border-radius: 4px;
    padding: 10px;
    border: #333 1px solid;
    color: #FFFFFF;
    width: 200px;
  cursor:pointer;
}
.inputFile {
    padding: 5px 0px;
  margin-top:8px; 
    background-color: #FFFFFF;
    width: 48px;  
    overflow: hidden;
  opacity: 0; 
  cursor:pointer;
}
.icon-choose-image {
    position: absolute;
    opacity: 0.1;
    top: 50%;
    left: 50%;
    margin-top: -24px;
    margin-left: -24px;
    width: 48px;
    height: 48px;
}
.upload-preview {border-radius:4px;}
#body-overlay {background-color: #DBD1D1;z-index: 999;position: absolute;left: 0;top: 0;width: 100%;height: 100%;display: none;}
#body-overlay div {position:absolute;left:50%;top:50%;margin-top:-32px;margin-left:-32px;}
</style>
<script>
       function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#image')
                        .attr('src', e.target.result)
                        .width(200)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
</script>

<div id="body-overlay">
   <div><img src="{{asset('public/images/loading.gif')}}" width="64px" height="64px"/></div>
</div>
<div class="bgColor">
   <form id="uploadForm" action="{{url('/upload-pp')}}" method="post" enctype="multipart/form-data">
   {!! csrf_field() !!}
      <div id="targetOuter">
         <div id="">
           <img id="image" src="#" alt="" />
         </div>
         <img src="{{asset('public/images/photo.png')}}"  class="icon-choose-image" />
         <div class="icon-choose-image" >
            <input name="userImage" id="userImage" type="file" class="inputFile" onChange="readURL(this);" />
            <input type="hidden" name="id" value="1">
         </div>
      </div>
      <div>
         <input type="submit" value="Upload Photo" class="btnSubmit" />
   </form>
   @if (Session::has('message'))
    <div class="alert alert-success fade-message">
         <p>{{ Session::get('message') }}</p>
    </div><br />

    <script>
    $(function(){
        setTimeout(function() {
            $('.fade-message').slideUp();
        }, 5000);
    });
    </script>
@endif
   </div>
</div>
</form>
@endsection