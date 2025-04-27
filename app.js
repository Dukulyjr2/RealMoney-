function copyReferral() {
  var copyText = document.getElementById("referralLink");
  copyText.select();
  document.execCommand("copy");
  alert("Referral link copied!");
}

function withdraw() {
  alert("Withdrawal request sent! You will receive your money shortly.");
}