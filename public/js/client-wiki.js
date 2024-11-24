window.RufflePlayer = window.RufflePlayer || {};
window.RufflePlayer.config = {
    publicPath: undefined,
    polyfills: true,

    allowScriptAccess: true,
    autoplay: "on",
    unmuteOverlay: "hidden",
    backgroundColor: "#EBEDEF",
    wmode: "window",
    letterbox: "fullscreen",
    warnOnUnsupportedContent: true,
    contextMenu: "off",
    showSwfDownload: false,
    upgradeToHttps: window.location.protocol === "https:",
    maxExecutionDuration: 60, // 15
    logLevel: "info", // "error", "warn", "info", "debug" and "trace"
    base: null,
    menu: false,
    salign: "",
    forceAlign: false,
    scale: "exactfit",
    forceScale: false,
    frameRate: null,
    quality: "high",
    splashScreen: true,
    preferredRenderer: null,
    openUrlMode: "allow",
    allowNetworking: "all",
    favorFlash: true,
    allowFullScreen: true,
};
