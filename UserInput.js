document.addEventListener('keydown', (event) => {
    if (event.code === "KeyA") {
        console.log("A PRESSED");
    } else if (event.code === "KeyD") {
        console.log("D PRESSED");
    } else if (event.code === "Space") {
        console.log("Space PRESSED");
    }
});