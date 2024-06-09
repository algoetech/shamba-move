import{_ as w}from"./dialog.vue_vue_type_script_setup_true_lang-16687c15.js";import{_ as C}from"./base-button.vue_vue_type_script_setup_true_lang-3d6cef8e.js";import{_ as z,a as I}from"./icon-key-2650eeaf.js";import{_ as S}from"./input-text.vue_vue_type_script_setup_true_lang-c368a274.js";import{_ as $,a as N}from"./input-label.vue_vue_type_script_setup_true_lang-b020cb97.js";import{_ as B}from"./input-native-select.vue_vue_type_script_setup_true_lang-b04d251a.js";import{_ as E}from"./icon-close-2c219153.js";import{d as K,T as j,s as A,o as F,h as T,b as t,w as d,f as s,u as e,a as _,F as U,K as D,Z as H}from"./app-8d2ddf0a.js";import{r as L}from"./ExclamationCircleIcon-2a26691d.js";import"./transition-fb8d0e84.js";import"./dialog-6de4cc28.js";import"./_plugin-vue_export-helper-c27b6911.js";import"./use-input-size-a5ed2a71.js";const W={class:"flex items-start justify-between gap-4 border-b px-6 py-4"},Y={class:"flex size-12 shrink-0 items-center justify-center rounded-full border"},Z=s("div",{class:"w-full"},[s("h3",{class:"text-base font-semibold leading-6 text-gray-600"},"Add New Key"),s("p",{class:"mt-1 text-sm text-gray-500"},"Add a new key to your source language.")],-1),q={class:"space-y-6 p-6"},G={class:"w-full space-y-1"},J={class:"space-y-1"},M={class:"flex w-full items-center gap-1"},O=s("span",{class:"text-sm text-gray-400"},"You can use dot notation (.) to create nested keys.",-1),P={class:"space-y-1"},Q={class:"grid grid-cols-1 gap-6 border-t px-6 py-4 md:grid-cols-2"},me=K({__name:"add-source-key",props:{files:{}},setup(p){const u=p,{close:a}=D(),o=j({key:"",file:"",content:""}),f=A(()=>u.files.map(l=>({value:l.id,label:l.nameWithExtension}))),y=()=>{o.post(route("ltu.source_translation.store_source_key"),{preserveScroll:!0,onSuccess:()=>{a()}})};return(l,n)=>{const g=H,x=z,k=E,i=$,v=B,c=N,b=S,h=I,m=C,V=w;return F(),T(U,null,[t(g,{title:"Add New Key"}),t(V,{size:"lg"},{default:d(()=>[s("div",W,[s("div",Y,[t(x,{class:"size-6 text-gray-400"})]),Z,s("div",{class:"flex w-8 cursor-pointer items-center justify-center text-gray-400 hover:text-gray-600",onClick:n[0]||(n[0]=(...r)=>e(a)&&e(a)(...r))},[t(k,{class:"size-5"})])]),s("div",q,[s("div",G,[t(i,{for:"file",value:"Select file"}),t(v,{id:"file",modelValue:e(o).file,"onUpdate:modelValue":n[1]||(n[1]=r=>e(o).file=r),error:e(o).errors.file,items:f.value,size:"md",placeholder:"Select translation file"},null,8,["modelValue","error","items"]),t(c,{message:e(o).errors.file},null,8,["message"])]),s("div",J,[t(i,{for:"key",value:"Source key"}),t(b,{id:"key",modelValue:e(o).key,"onUpdate:modelValue":n[2]||(n[2]=r=>e(o).key=r),error:e(o).errors.key,placeholder:"Enter key"},null,8,["modelValue","error"]),t(c,{message:e(o).errors.key},null,8,["message"]),s("div",M,[t(e(L),{class:"size-4 text-gray-400"}),O])]),s("div",P,[t(i,{for:"content",value:"Source content"}),t(h,{id:"content",modelValue:e(o).content,"onUpdate:modelValue":n[3]||(n[3]=r=>e(o).content=r),error:e(o).errors.content,placeholder:"Enter translation content for this key."},null,8,["modelValue","error"]),t(c,{message:e(o).errors.content},null,8,["message"])])]),s("div",Q,[t(m,{variant:"secondary",type:"button",size:"lg",onClick:e(a)},{default:d(()=>[_(" Close ")]),_:1},8,["onClick"]),t(m,{variant:"primary",type:"button",size:"lg",disabled:e(o).processing,"is-loading":e(o).processing,onClick:y},{default:d(()=>[_(" Create ")]),_:1},8,["disabled","is-loading"])])]),_:1})],64)}}});export{me as default};
