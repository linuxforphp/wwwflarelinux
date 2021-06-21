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
    copyClip('myDockerCommand1Button', 'docker run -it --rm -p 9650:9650 --name my_flare_server asclinux/flarelinux:1.0.0-beta flare --coston');

}

document.querySelector('#myDockerCommand2Button').onclick = function() {
    copyClip('myDockerCommand2Button', 'docker exec -it my_flare_server /bin/bash');

}

document.querySelector('#myDockerCommand3Button').onclick = function() {
    copyClip('myDockerCommand3Button', 'cd /root/flare/client');

}

document.querySelector('#myDockerCommand4Button').onclick = function() {
    copyClip('myDockerCommand4Button', '$( ./bridge.sh xrp ) &');

}

document.querySelector('#myDockerCommand5Button').onclick = function() {
    copyClip('myDockerCommand5Button', 'node --no-warnings prove xrp FFB44382D074CB37B63AC9D3EB2D829C1D1FE4D54DC1A0BCC1D23BAE18D53272 2>/dev/null');

}

document.querySelector('#myDockerCommand6Button').onclick = function() {
    copyClip('myDockerCommand6Button', 'docker stop my_flare_server');

}