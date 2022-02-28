<div class=" container mx-auto lg:px-40 lg:pb-20 md:pb-10">
  <form action="{{ route('sendmail') }}" id="demo-form" method="post">
    @csrf
    <select name="mail_category" class=" w-full shadow-xl rounded-lg">
      <option value="买卖">买卖</option>
      <option value="租赁">租赁</option>
      <option value="投资">投资</option>
      <option value="国际贸易">国际贸易</option>
      <option value="其他">其他</option>
    </select>
    <input type="text" name="mail" id="" placeholder="邮箱" class="mt-6 w-full shadow-xl rounded-lg">
    <input type="text" name="mail_name" id="" placeholder="如何称呼" class="mt-6 w-full shadow-xl rounded-lg">
    <input type="text" name="mail_name_katakana" id="" placeholder="カタカナ" class="mt-6 w-full shadow-xl rounded-lg">
    <textarea name="mail_content" rows="5" class="mt-6 w-full shadow-xl rounded-lg" placeholder="咨询内容"></textarea>

    <div class=" flex justify-center lg:py-8 md:py-4 md:items-center md:flex-wrap">
      <label class="lg:py-4 lg:mr-2">验证码</label>
      <input type="text" name="captcha">
      <img src="{{captcha_src('flat')}}" onclick="this.src='/captcha/flat?'+new Date().getTime()" id="captchaCode" alt="captcha" class="captcha cursor-pointer md:pl-1 md:pt-2">
      <p class="lg:py-4 md:px-5">看不清？单击图片更换验证码</p>
    </div>
    <div class=" flex justify-center">
      <div class=" p-1 border border-black rounded-lg">
      <input type="submit" value="发送" class=" px-8 py-4 text-xl font-bold bg-black text-white rounded-lg cursor-pointer">
      </div>
    </div>
  </form>
</div>
