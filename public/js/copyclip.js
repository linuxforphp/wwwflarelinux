function copyClip(button, value) {
    var tempInput = document.createElement("input");
    tempInput.value = value;
    document.body.appendChild(tempInput);
    tempInput.select();
    document.execCommand("copy");
    document.body.removeChild(tempInput);
    let copyButton = document.getElementById(button);
    copyButton.innerHTML = "Copied!";
}

document.querySelector('#myDockerCommand1Button').onclick = function() {
    copyClip('myDockerCommand1Button', 'docker run -dit --restart=always -e FLARE_BIND_ADDRESS=0.0.0.0 -p 9650:9650 --name my_flare_server asclinux/flarelinux:1.1.6-1.10.0 flare --flare-coston2');
}

document.querySelector('#myDockerCommand6Button').onclick = function() {
    copyClip('myDockerCommand6Button', 'docker rm -f my_flare_server');
}
