<div class=" container mx-auto lg:px-20 lg:pb-20">
  <div class="w-full px-40 py-10 shadow-2xl grid grid-cols-2 gap-4 border-gray-400 relative">
    <div class=" px-5 py-4 text-xl font-bold">公司名称</div>
    <div class=" py-4 text-xl font-bold">株式会社仁通</div>
    <div class=" px-5 py-4 text-xl font-bold">代表人</div>
    <div class=" py-4 text-xl font-bold">刘丞</div>
    <div class=" px-5 py-4 text-xl font-bold">成立日期</div>
    <div class=" py-4 text-xl font-bold">2012年</div>
    <div class=" px-5 py-4 text-xl font-bold">营业时间</div>
    <div class=" py-4 text-xl font-bold">10:00 - 19:00 周三周日除外</div>
  </div>
</div>
<div class="concept ">
  <div class="container mx-auto lg:px-20 py-10">
    <h1 class=" text-3xl text-center text-white">Management Concept</h1>
    <p class=" lg:pt-2 text-xl text-center text-white">/ 经营理念</p>
    <div class=" grid grid-cols-12 gap-y-5 lg:px-40 mt-10 mb-10">
      <div class=" bg-red-500 p-5 w-20 text-center">愿景</div>
      <div class=" col-span-11 bg-white p-5">最大程度地追求和促进日中商务往来的相辅相成，为构建幸福和谐的国际社会和区域社会作出贡献。
      </div>
      <div class=" bg-green-500 py-8 w-20 text-center">使命</div>
      <div class=" col-span-11 bg-white p-5">为了使我们提供的服务，使所有的利益相关人员（包括投资商、产权所有者、管理公司、顾客、从业人员等）认可和满足，我们会以持续进步作标杆，不断完善和提高我们的产品质量、服务水平、接待对应的方式方法等等。
      </div>
      <div class=" bg-blue-500 py-16 w-20 text-center">方针</div>
      <div class=" col-span-11 bg-white p-5">1、 （与顾客）:顾客本位
        ”顾客第一位“,站在顾客的角度思考，时刻留心真诚并迅速地接待对应顾客。<br>
        2、 （与合作伙伴）:双赢
        始终为构建和维持与合作伙伴良好的、长期的合作伙伴关系
        努力。<br>
        3、 （与同事）：自由豁达&互相提高
        共同进步构筑相互尊重、互相激励、共同切磋讨论、分享的
        良好伙伴关系。<br>
        4、 （与自身）：自律&自我成长
        有挑战精神，不断努力，主动地积极地付诸行动。
      </div>
    </div>
  </div>
</div>

<div class="container mx-auto lg:px-20 pt-10 pb-40">
  <h1 class=" text-3xl text-center">Business Content</h1>
  <p class=" lg:pt-2 text-xl text-center">/ 业务内容</p>
  <div class="w-full px-40 py-10 shadow-2xl lg:mt-10 border-gray-400">
    <div class="flex md:flex-wrap mb-4 border-b-2 pb-4">
      <x-iconpark-onekey-o class=" h-14 w-14 stroke-4 text-red-600" />
      <p class=" text-2xl font-bold py-2 pl-6 pr-14 flex-none">房屋租赁</p>
      <p class=" text-2xl py-2">主要客户为在日或者即将来日中国留学生。<br>房源全，手续费业内最低，附加服务充实。</p>
    </div>
    <div class="flex md:flex-wrap mb-4 border-b-2 pb-4">
      <x-iconpark-twokey-o class=" h-14 w-14 stroke-4 text-green-600" />
      <p class=" text-2xl font-bold py-2 pl-6 pr-14 flex-none">房屋买卖</p>
      <p class=" text-2xl py-2">主要客户为来日投资的中国投资家。</p>
    </div>
    <div class="flex md:flex-wrap mb-4 border-b-2 pb-4">
      <x-iconpark-threekey-o class=" h-14 w-14 stroke-4 text-yellow-600" />
      <p class=" text-2xl font-bold py-2 pl-6 pr-14 flex-none">资产运营</p>
      <p class=" text-2xl py-2">公寓出租: 代租、物业管理。<br>民宿运营: 业界最低管理费。</p>
    </div>
    <div class="flex md:flex-wrap mb-4">
      <x-iconpark-fourkey-o class=" h-14 w-14 stroke-4 text-blue-600" />
      <p class=" text-2xl font-bold py-2 pl-6 pr-14 flex-none">国际贸易</p>
      <p class=" text-2xl py-2">中国日本之间的国际贸易。</p>
    </div>
  </div>

  <div class="w-full px-40 py-20 shadow-2xl lg:mt-20 border-gray-400">
    <div class=" bg-gray-800 bg-opacity-90">
      <div class="flex" x-data="{ tab: 'kyoto' }">
        <div class="flex flex-col">
          <button :class="{ 'active font-bold bg-yellow-400 text-gray-100 bg-opacity-90': tab === 'kyoto' }" class=" px-20 py-10 text-gray-200 text-xl font-bold focus:outline-none focus:bg-red-500 focus:text-white hover:bg-red-500 hover:text-gray-300 rounded-t-sm" @click="tab = 'kyoto'">
            本店
          </button>
          <button :class="{ 'active font-bold bg-yellow-400 bg-opacity-90 text-gray-100 ': tab === 'fu' }" class="px-20 py-10 text-gray-200 text-xl font-bold focus:outline-none focus:bg-red-500 focus:text-white hover:bg-red-500 hover:text-gray-300  rounded-t-sm" @click="tab = 'fu'">
            伏见店
          </button>
          <button :class="{ 'active font-bold bg-yellow-400 bg-opacity-90 text-gray-100 ': tab === 'osaka' }" class="px-20 py-10 text-gray-200 text-xl font-bold focus:outline-none focus:bg-red-500 focus:text-white hover:bg-red-500 hover:text-gray-300  rounded-t-sm" @click="tab = 'osaka'">
            大阪店
          </button>
        </div>

        <div class=" text-indigo-100 pl-10 text-xl w-8/12 h-64">
          <div x-show="tab === 'kyoto'" class=" relative">
            <p class="pt-10">地址：日本京都市南区西九条池ノ内町18-1</p>
            <p class="pt-10">电话： +81-75-682-7577</p>
            <p class="pt-10">传真： +81-75-682-7588</p>
            <div class=" absolute -bottom-20 right-0">
              <a href="https://goo.gl/maps/yZcSH6oHujgBZBEt9" target="_blank" class=" block px-6 py-4 bg-black text-white font-bold text-xl rounded-3xl bg-opacity-80">MAP</a>
            </div>
          </div>
          <div x-show="tab === 'fu'" class=" relative">
            <p class="pt-10">地址：日本京都市伏見区深草下川原町 130-4 華信ビル1F</p>
            <p class="pt-10">电话： +81-75-643-7767</p>
            <div class=" absolute -bottom-20 right-0">
              <a href="https://goo.gl/maps/5YJy9G3dBo31rEUq9" target="_blank" class=" block px-6 py-4 bg-black text-white font-bold text-xl rounded-3xl bg-opacity-80">MAP</a>
            </div>
          </div>
          <div x-show="tab === 'osaka'" class=" relative">
            <p class="pt-10">地址：日本大阪市西区南堀江 1-1-16 OTK四ツ橋ビル7F</p>
            <p class="pt-10">电话： +81-64-395-5758</p>
            <div class=" absolute -bottom-20 right-0">
              <a href="https://goo.gl/maps/M9eqQoWJFmAwWF679" target="_blank" class=" block px-6 py-4 bg-black text-white font-bold text-xl rounded-3xl bg-opacity-80">MAP</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
