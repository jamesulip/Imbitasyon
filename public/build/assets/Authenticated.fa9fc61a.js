import{B as L}from"./ApplicationLogo.a9147a95.js";import{as as B,aw as D,Q as v,k as C,ay as d,W as g,X as e,aF as u,b3 as w,bn as k,a2 as i,b1 as o,A as c,x as l,b6 as M,U as x,a1 as h,D as b,V as N}from"./vendor-@vue.80adf6ce.js";import{L as _}from"./vendor.7dce1e3a.js";const z={class:"relative"},E={__name:"Dropdown",props:{align:{default:"right"},width:{default:"48"},contentClasses:{default:()=>["py-1","bg-white"]}},setup(n){const s=n,t=m=>{r.value&&m.key==="Escape"&&(r.value=!1)};B(()=>document.addEventListener("keydown",t)),D(()=>document.removeEventListener("keydown",t));const a=v(()=>({48:"w-48"})[s.width.toString()]),p=v(()=>s.align==="left"?"origin-top-left left-0":s.align==="right"?"origin-top-right right-0":"origin-top"),r=C(!1);return(m,f)=>(d(),g("div",z,[e("div",{onClick:f[0]||(f[0]=y=>r.value=!r.value)},[u(m.$slots,"trigger")]),w(e("div",{class:"fixed inset-0 z-40",onClick:f[1]||(f[1]=y=>r.value=!1)},null,512),[[k,r.value]]),i(M,{"enter-active-class":"transition ease-out duration-200","enter-from-class":"transform opacity-0 scale-95","enter-to-class":"transform opacity-100 scale-100","leave-active-class":"transition ease-in duration-75","leave-from-class":"transform opacity-100 scale-100","leave-to-class":"transform opacity-0 scale-95"},{default:o(()=>[w(e("div",{class:c(["absolute z-50 mt-2 rounded-md shadow-lg",[l(a),l(p)]]),style:{display:"none"},onClick:f[2]||(f[2]=y=>r.value=!1)},[e("div",{class:c(["rounded-md ring-1 ring-black ring-opacity-5",n.contentClasses])},[u(m.$slots,"content")],2)],2),[[k,r.value]])]),_:3})]))}},V={__name:"DropdownLink",setup(n){return(s,t)=>(d(),x(l(_),{class:"block w-full px-4 py-2 text-left text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"},{default:o(()=>[u(s.$slots,"default")]),_:3}))}},j={__name:"NavLink",props:["href","active"],setup(n){const s=n,t=v(()=>s.active?"inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition  duration-150 ease-in-out":"inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out");return(a,p)=>(d(),x(l(_),{href:n.href,class:c(l(t))},{default:o(()=>[u(a.$slots,"default")]),_:3},8,["href","class"]))}},$={__name:"ResponsiveNavLink",props:["href","active"],setup(n){const s=n,t=v(()=>s.active?"block pl-3 pr-4 py-2 border-l-4 border-indigo-400 text-base font-medium text-indigo-700 bg-indigo-50 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700 transition duration-150 ease-in-out":"block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out");return(a,p)=>(d(),x(l(_),{href:n.href,class:c(l(t))},{default:o(()=>[u(a.$slots,"default")]),_:3},8,["href","class"]))}},S={class:"min-h-screen bg-gray-100"},A={class:"bg-white border-b border-gray-100"},O={class:"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8"},T={class:"flex justify-between h-16"},U={class:"flex"},F={class:"shrink-0 flex items-center"},Q={class:"hidden space-x-8 sm:-my-px sm:ml-10 sm:flex"},R=h(" Dashboard "),W={class:"hidden sm:flex sm:items-center sm:ml-6"},X={class:"ml-3 relative"},q={class:"inline-flex rounded-md"},G={type:"button",class:"inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150"},H=e("svg",{class:"ml-2 -mr-0.5 h-4 w-4",xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 20 20",fill:"currentColor"},[e("path",{"fill-rule":"evenodd",d:"M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z","clip-rule":"evenodd"})],-1),I=h(" Log Out "),J={class:"-mr-2 flex items-center sm:hidden"},K={class:"h-6 w-6",stroke:"currentColor",fill:"none",viewBox:"0 0 24 24"},P={class:"pt-2 pb-3 space-y-1"},Y=h(" Dashboard "),Z={class:"pt-4 pb-1 border-t border-gray-200"},ee={class:"px-4"},te={class:"font-medium text-base text-gray-800"},se={class:"font-medium text-sm text-gray-500"},oe={class:"mt-3 space-y-1"},ne=h(" Log Out "),ae={key:0,class:"bg-white shadow"},re={class:"max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8"},ce={__name:"Authenticated",setup(n){const s=C(!1);return(t,a)=>(d(),g("div",null,[e("div",S,[e("nav",A,[e("div",O,[e("div",T,[e("div",U,[e("div",F,[i(l(_),{href:t.route("dashboard")},{default:o(()=>[i(L,{class:"block h-9 w-auto"})]),_:1},8,["href"])]),e("div",Q,[i(j,{href:t.route("dashboard"),active:t.route().current("dashboard")},{default:o(()=>[R]),_:1},8,["href","active"])])]),e("div",W,[e("div",X,[i(E,{align:"right",width:"48"},{trigger:o(()=>[e("span",q,[e("button",G,[h(b(t.$page.props.auth.user.name)+" ",1),H])])]),content:o(()=>[i(V,{href:t.route("logout"),method:"post",as:"button"},{default:o(()=>[I]),_:1},8,["href"])]),_:1})])]),e("div",J,[e("button",{onClick:a[0]||(a[0]=p=>s.value=!s.value),class:"inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"},[(d(),g("svg",K,[e("path",{class:c({hidden:s.value,"inline-flex":!s.value}),"stroke-linecap":"round","stroke-linejoin":"round","stroke-width":"2",d:"M4 6h16M4 12h16M4 18h16"},null,2),e("path",{class:c({hidden:!s.value,"inline-flex":s.value}),"stroke-linecap":"round","stroke-linejoin":"round","stroke-width":"2",d:"M6 18L18 6M6 6l12 12"},null,2)]))])])])]),e("div",{class:c([{block:s.value,hidden:!s.value},"sm:hidden"])},[e("div",P,[i($,{href:t.route("dashboard"),active:t.route().current("dashboard")},{default:o(()=>[Y]),_:1},8,["href","active"])]),e("div",Z,[e("div",ee,[e("div",te,b(t.$page.props.auth.user.name),1),e("div",se,b(t.$page.props.auth.user.email),1)]),e("div",oe,[i($,{href:t.route("logout"),method:"post",as:"button"},{default:o(()=>[ne]),_:1},8,["href"])])])],2)]),t.$slots.header?(d(),g("header",ae,[e("div",re,[u(t.$slots,"header")])])):N("",!0),e("main",null,[u(t.$slots,"default")])])]))}};export{ce as _};