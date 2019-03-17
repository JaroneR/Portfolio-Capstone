import { Component, OnInit } from '@angular/core';
import { Player } from '../player';


import { PlayerService } from '../player.service';
@Component({
  selector: 'app-admin-lobby',
  templateUrl: './admin-lobby.component.html',
  styleUrls: ['./admin-lobby.component.css']
})
export class AdminLobbyComponent implements OnInit {
  player: Player = {
    name: 'Tokido',
    rank: 1,
    score: 900000,
    time: '1d 12h 32m',
    game: 'Street fighter V',
    status: 'Available'
  };
  
  players: Player[];
  selectedPlayer: Player;
  onSelect(player: Player): void{
    this.selectedPlayer = player;
    this.showme = true;
  }

  showme: boolean = true;
  showme2:boolean = true;
  onShowme() {
    this.showme = !this.showme;
  }
  onShowme2() {
    this.showme2 = !this.showme2;
  }
  onJoingame() {
    this.showme = !this.showme;
    alert("Joined Game successfully!");
  }
  deleteRow(name){
    for(let i = 0; i < this.players.length; i++){
      if(this.players[i].name == name){
        this.players.splice(i,1);
      }
    }
  }
  private newAttribute: any ={};
  addRow(){
    this.players.push(this.newAttribute);
    this.newAttribute = {};
    this.showme2 = !this.showme2;
  }
  constructor(private playerService: PlayerService) { }

  ngOnInit() {
    this.getPlayers();
  }

  getPlayers(): void{
    this.playerService.getPLAYERS().subscribe(players => this.players = players);
  }

}
