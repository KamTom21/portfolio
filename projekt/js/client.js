
window.addEventListener("load", () => {
  try {
    const payload = {
      url: location.href,
      ref: document.referrer || "",
      ua: navigator.userAgent,
      ts: new Date().toISOString()
    };

    const blob = new Blob([JSON.stringify(payload)], { type: "application/json" });

    
    if (navigator.sendBeacon) {
      navigator.sendBeacon("track.php", blob);
    } else {
      // pro starší prohlížeče
      fetch("track.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(payload)
      }).catch(() => {});
    }
  } catch (e) {
    
  }
});
