<table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border-collapse: collapse;">
  <tr>
    <td>
      <div style="margin: 20px;text-align: center;margin-top: 50px"> <img src="https://img.freepik.com/free-vector/business-leaders-standing-paper-planes_74855-2333.jpg?w=1380" border="0" style="display:block;width: 100%;height: 100%"> </div>
    </td>
  </tr>
  <tr>
    <td>
      <div style="border: #36649d 1px dashed;margin: 30px;padding: 20px"> <label style="font-size: 22px;color: #36649d;font-weight: bold">一封用户发来的咨询邮件</label>
        <p style="font-size: 16px">来自&nbsp;<label style="font-weight: bold"> {{ $info->mail_name }}&nbsp;( {{ $info->mail_name_katakana }} )</label></p>
        <p style="font-size: 16px">{{ $info->mail }}</p>
        <p style="font-size: 16px">咨询内容为</p>
        <p style="font-size: 16px">{{ $info->mail_category }}</p>
        <p style="font-size: 16px">{{ $info->mail_content }}</p>
      </div>
    </td>
  </tr>
  <tr>
    <td>
      <div style="margin: 40px">
        <p style="font-size: 16px">仁通HOME PAGE</p>
        <p style="color:red;font-size: 14px ">（这是一封系统自动发送的邮件，请勿直接回复。）</p>
      </div>
    </td>
  </tr>
  <tr>
    <td>
      <div align="right" style="margin: 40px;border-top: solid 1px gray" id="bottomTime">
        <p style="margin-right: 20px">Powered by</p> <label style="margin-right: 20px"><a href="https://kyoapps.com" target="_blank" rel="noopener noreferrer">KYOAPPS</a></label>
      </div>
    </td>
  </tr>
</table>
