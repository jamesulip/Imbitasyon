import{Q as u,ay as a,U as f,b1 as s,a2 as i,x as e,W as _,V as p,X as o,A as h,bp as g,a1 as n}from"./vendor-@vue.80adf6ce.js";import{_ as y,a as b}from"./Guest.845b6f8f.js";import{u as v,H as x,L as k}from"./vendor.7dce1e3a.js";import"./ApplicationLogo.a9147a95.js";import"./plugin-vue_export-helper.21dcd24c.js";const V=o("div",{class:"mb-4 text-sm text-gray-600"}," Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another. ",-1),w={key:0,class:"mb-4 font-medium text-sm text-green-600"},B=["onSubmit"],E={class:"mt-4 flex items-center justify-between"},L=n(" Resend Verification Email "),N=n("Log Out"),$={__name:"VerifyEmail",props:{status:String},setup(r){const c=r,t=v(),d=()=>{t.post(route("verification.send"))},l=u(()=>c.status==="verification-link-sent");return(m,S)=>(a(),f(y,null,{default:s(()=>[i(e(x),{title:"Email Verification"}),V,e(l)?(a(),_("div",w," A new verification link has been sent to the email address you provided during registration. ")):p("",!0),o("form",{onSubmit:g(d,["prevent"])},[o("div",E,[i(b,{class:h({"opacity-25":e(t).processing}),disabled:e(t).processing},{default:s(()=>[L]),_:1},8,["class","disabled"]),i(e(k),{href:m.route("logout"),method:"post",as:"button",class:"underline text-sm text-gray-600 hover:text-gray-900"},{default:s(()=>[N]),_:1},8,["href"])])],40,B)]),_:1}))}};export{$ as default};