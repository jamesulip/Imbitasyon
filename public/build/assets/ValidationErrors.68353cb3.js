import{k as _,as as p,ay as t,W as s,D as i,aF as f,Q as u,x as l,X as c,I as g,aE as h,V as v}from"./vendor-@vue.80adf6ce.js";import{b as y}from"./vendor.7dce1e3a.js";const k=["value"],S={__name:"Input",props:["modelValue"],emits:["update:modelValue"],setup(o){const e=_(null);return p(()=>{e.value.hasAttribute("autofocus")&&e.value.focus()}),(a,r)=>(t(),s("input",{class:"border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm",value:o.modelValue,onInput:r[0]||(r[0]=n=>a.$emit("update:modelValue",n.target.value)),ref_key:"input",ref:e},null,40,k))}},b={class:"block font-medium text-sm text-gray-700"},x={key:0},V={key:1},D={__name:"Label",props:["value"],setup(o){return(e,a)=>(t(),s("label",b,[o.value?(t(),s("span",x,i(o.value),1)):(t(),s("span",V,[f(e.$slots,"default")]))]))}},$={key:0},E=c("div",{class:"font-medium text-red-600"},"Whoops! Something went wrong.",-1),w={class:"mt-3 list-disc list-inside text-sm text-red-600"},F={__name:"ValidationErrors",setup(o){const e=u(()=>y().props.value.errors),a=u(()=>Object.keys(e.value).length>0);return(r,n)=>l(a)?(t(),s("div",$,[E,c("ul",w,[(t(!0),s(g,null,h(l(e),(d,m)=>(t(),s("li",{key:m},i(d),1))),128))])])):v("",!0)}};export{F as _,D as a,S as b};