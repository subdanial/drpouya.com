<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>
<?php get_template_part('main-nav'); ?>

<div class="container-fluid h-100 ">
  <div class="row h-100">
    <div class="col-12 col-lg-6 order-1 order-lg-0 d-flex align-items-center  h-100 p-0">
      <div class="w-80 mx-auto mb-5 mb-lg-0">
        <h4 class="pt-5 mt-5 mt-lg-0 pt-lg-0">باما در ارتباط باشید</h4>
        <table class="table">
          <tr>
            <td class="w-20 border-0">آدرس : </td>
            <td class="border-0">تهران، پاسداران، بهستان سوم، پلاک 12</td>
          </tr>
          <tr>
            <td class="w-20">تماس : </td>
            <td>09121003344</td>
          </tr>
          <tr>
            <td class="w-20">ایمیل : </td>
            <td>contact@poya.ir</td>
          </tr>
          <tr>
            <td class="w-20">اینساتگرام : </td>
            <td>pouya.clinic</td>
          </tr>
          <tr>
            <td class="w-20">ارسال پیام :</td>
            <td></td>
          </tr>

        </table>
        <div class="row">
          <div class="col-12 col-lg-6">
            <div class="form-group">
              <label for="">نام شما</label>
              <input type="text" class="form-control" name="" id=""  placeholder="نام شما">
            </div>
          </div>
          <div class="col-12 col-lg-6">
          <div class="form-group">
              <label for="">شماره تماس</label>
              <input type="text" class="form-control" name="" id=""  placeholder="تلفن همراه">
            </div>
          </div>
        </div>
        <label for="">پیام شما </label>
        <textarea class="form-control" name="" id="" rows="3"></textarea>
        <button class="submit btn btn-blue mt-4">ارسال پیام</button>
      </div>

    </div>

    <div class="d-none d-lg-flex col-lg-6  order-0 order-lg-1 h-100 p-0">
      <?php echo do_shortcode('[neshan-map id="2"]'); ?>
    </div>

    <div class="d-lg-none d-flex col-lg-6  order-0 order-lg-1 h-100 p-0">
      <?php echo do_shortcode('[neshan-map id="1"]'); ?>
    </div>
  </div>


</div>
<?php get_footer(); ?>
