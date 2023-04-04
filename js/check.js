"use strict";

export function check (post){
  if (
post.includes("</>") ||
post.includes("<") ||
post.includes(">") ||
post.includes("/") ||
post.includes("alert") ||
post.includes("=") ||
post.includes("|") ||
post.includes("&") ||
post.includes("?") ||
post.includes(";") ||
post.includes("*") ||
post.includes("@") ||
post.includes("(") ||
post.includes(")") ||
post.includes("[") ||
post.includes("]") ||
post.includes("{") ||
post.includes("}") ||
post.includes("_") ||
post.includes("hot") ||
post.includes("sex") ||
post.includes("sexy") ||
post.includes("fucking") ||
post.includes("fuck") ||
post.includes("pussy") ||
post.includes("bobs") ||
post.includes("sucking") ||
post.includes("hot girl") ||
post.includes("nonsense") ||
post.includes("what")) {
  return false;
} else {
  return true;
}
}