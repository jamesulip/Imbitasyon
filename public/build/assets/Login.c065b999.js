import{Q as g,b3 as k,bi as w,x as s,ay as n,W as _,f as x,U as c,b1 as m,a2 as o,D as y,V as u,X as r,A as v,bp as V,a1 as b}from"./vendor-@vue.80adf6ce.js";import{_ as $,a as B}from"./Guest.845b6f8f.js";import{_ as C,a as p,b as f}from"./ValidationErrors.68353cb3.js";import{u as L,H as U,L as N}from"./vendor.7dce1e3a.js";import"./ApplicationLogo.a9147a95.js";import"./plugin-vue_export-helper.21dcd24c.js";const R=["value"],S={__name:"Checkbox",props:{checked:{type:[Array,Boolean],default:!1},value:{default:null}},emits:["update:checked"],setup(l,{emit:e}){const d=l,i=g({get(){return d.checked},set(t){e("update:checked",t)}});return(t,a)=>k((n(),_("input",{type:"checkbox",value:l.value,"onUpdate:modelValue":a[0]||(a[0]=h=>x(i)?i.value=h:null),class:"rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"},null,8,R)),[[w,s(i)]])}},q={key:0,class:"mb-4 font-medium text-sm text-green-600"},D=["onSubmit"],F={class:"mt-4"},P={class:"block mt-4"},A={class:"flex items-center"},E=r("span",{class:"ml-2 text-sm text-gray-600"},"Remember me",-1),H={class:"flex items-center justify-end mt-4"},M=b(" Forgot your password? "),j=b(" Log in "),I={__name:"Login",props:{canResetPassword:Boolean,status:String},setup(l){const e=L({email:"",password:"",remember:!1}),d=()=>{e.post(route("login"),{onFinish:()=>e.reset("password")})};return(i,t)=>(n(),c($,null,{default:m(()=>[o(s(U),{title:"Log in"}),o(C,{class:"mb-4"}),l.status?(n(),_("div",q,y(l.status),1)):u("",!0),r("form",{onSubmit:V(d,["prevent"])},[r("div",null,[o(p,{for:"email",value:"Email"}),o(f,{id:"email",type:"email",class:"mt-1 block w-full",modelValue:s(e).email,"onUpdate:modelValue":t[0]||(t[0]=a=>s(e).email=a),required:"",autofocus:"",autocomplete:"username"},null,8,["modelValue"])]),r("div",F,[o(p,{for:"password",value:"Password"}),o(f,{id:"password",type:"password",class:"mt-1 block w-full",modelValue:s(e).password,"onUpdate:modelValue":t[1]||(t[1]=a=>s(e).password=a),required:"",autocomplete:"current-password"},null,8,["modelValue"])]),r("div",P,[r("label",A,[o(S,{name:"remember",checked:s(e).remember,"onUpdate:checked":t[2]||(t[2]=a=>s(e).remember=a)},null,8,["checked"]),E])]),r("div",H,[l.canResetPassword?(n(),c(s(N),{key:0,href:i.route("password.request"),class:"underline text-sm text-gray-600 hover:text-gray-900"},{default:m(()=>[M]),_:1},8,["href"])):u("",!0),o(B,{class:v(["ml-4",{"opacity-25":s(e).processing}]),disabled:s(e).processing},{default:m(()=>[j]),_:1},8,["class","disabled"])])],40,D)]),_:1}))}};export{I as default};