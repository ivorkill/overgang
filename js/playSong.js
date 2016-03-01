function StartOrStop(audioFile) {
  var audio = document.getElementById("myAudio");
    //Controleer of er een src is en of de nieuwe niet het zelfde is met de nieuwe. Verander hem, of doe niks
    if (!audio.src || audio.src !== audioFile) audio.src = audioFile;
    //Kijk of de audio is gepauzeerd als dat zo is speel hem af en anders pauzeer je hem
    if (audio.paused == false)
        audio.pause();
    else
        audio.play();
}