import { Component, OnInit } from '@angular/core';
import { Player } from '../player';

import { PlayerService } from '../player.service';

@Component({
  selector: 'app-players',
  templateUrl: './players.component.html',
  styleUrls: ['./players.component.css']
})
export class PlayersComponent implements OnInit {
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
  onShowme() {
    this.showme = !this.showme;
  }
  onJoingame() {
    this.showme = !this.showme;
    alert("Joined Game successfully!");
  }
  constructor(private playerService: PlayerService) { }

  ngOnInit() {
    this.getPlayers();
  }

  getPlayers(): void{
    this.playerService.getPLAYERS().subscribe(players => this.players = players);
  }

}
