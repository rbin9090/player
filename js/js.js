let musicas = [
    {titulo:'som', artista:'vinka', src:'musicas/vinka.mp3', img:'img/vinka.png'},
    {titulo:'POU PORRI', artista:'BONDE DO GATO PRETO ', src:'musicas/BGP.mp3', img:'imagens/samba.jpg'},
    {titulo:'Música piano', artista:'John Green', src:'musicas/A Brand New Start - TrackTribe (1).mp3', img:'imagens/piano.jpg'}
];



let music = document.querySelector('audio');

let indexMusic = 0;

let datafim = document.querySelector('.fim');

let imagem = document.querySelector('img');

let nameMusic = document.querySelector('.descrincao h2');
let nameAutor = document.querySelector('.descrincao i');

datafim.textContent = convertsPm( Math.floor(music.duration));








 //eventos

document.querySelector('.botao-play').addEventListener('click',playaudio);
document.querySelector('.botao-pause').addEventListener('click',pauseaudio);
document.querySelector('.anterior').addEventListener('click',audioAnterior);
document.querySelector('.proximo').addEventListener('click',proximaMusica);
music.addEventListener('timeupdate',atbarra);








 







//funcoes

function renderMusic() {
	musicas.setAttribute('src',music[index].src);
	musicas.addEventListener('loadeddata', () =>{
		nameMusic.textContent = music[index].titulo;
		nameAutor.textContent = music[index].artista;
		imagem.textContent = music[index].img;
		datafim.textContent = convertsPm( Math.floor(music.duration));
		
	});

}

function playaudio() {
	
	music.play();
	
 
	document.querySelector('.botao-pause').style.display = "block";
	
	document.querySelector('.botao-play').style.display = "none";

}


function pauseaudio() {
	music.pause();
       
	   document.querySelector('.botao-play').style.display = "block";
		document.querySelector('.botao-pause').style.display = "none";
	
}


function atbarra() {
	
document.querySelector('progress').style.width = music.currentTime / music.duration * 100 + '%';

let timedecorrent = document.querySelector('.inicio');

timedecorrent.textContent = convertsPm(Math.floor(music.currentTime));

//timedecorrent.textContent = music.currentTime;

}

function convertsPm(segundos) {
let campMin = Math.floor(segundos / 60);
let campSeg = segundos % 60;
if(campSeg < 10){
	campSeg = '0' + campSeg;
}

return campMin+':'+campSeg;

}



//


function audioAnterior() {
	indexMusic--;
    if (indexMusic < 0) {
        indexMusic = 2;
    }
    renderMusic(indexMusic);
}


function proximaMusica() {
	
	indexMusic++;
	
    if (indexMusic > 2){
       indexMusic = 0;
    }
    renderMusic(indexMusic);

}
















//https://www.youtube.com/watch?v=rd4Mr08bX20


//22:14