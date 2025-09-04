function copyClip(button, value) {
    var tempInput = document.createElement("input");
    tempInput.value = value;
    document.body.appendChild(tempInput);
    tempInput.select();
    document.execCommand("copy");
    document.body.removeChild(tempInput);
    let copyButton = document.getElementById(button);
    copyButton.firstChild.classList.remove("fa-regular");
    copyButton.firstChild.classList.remove("fa-copy");
    copyButton.parentNode.title = "Copied!";
    copyButton.firstChild.classList.add("fa-solid");
    copyButton.firstChild.classList.add("fa-check");
    copyButton.firstChild.classList.add("copied");
}

document.querySelector('#myDockerCommand1Button').onclick = function() {
    copyClip('myDockerCommand1Button', 'docker run -dit --restart=always -e FLARE_BIND_ADDRESS=0.0.0.0 -p 9650:9650 --name my_flare_server asclinux/flarelinux:1.2.0-1.11.0 flare --flare-coston2');
}

document.querySelector('#myDockerCommand2Button').onclick = function() {
    copyClip('myDockerCommand2Button', 'docker rm -f my_flare_server');
}
