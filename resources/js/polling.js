self.onmessage = function (e) {
    const { interval = 1 * 1000, url } = e.data;

    const poll = async () => {
        try {
            const response = await fetch(url);
            const data = await response.json();
            self.postMessage({ status: "success", data });
        } catch (error) {
            self.postMessage({ status: "error", error: error.message });
        }
    };

    poll();
    const timer = setInterval(poll, interval);

    self.onmessage = (msg) => {
        if (msg.data === "stop") {
            clearInterval(timer);
        }
    };
};
