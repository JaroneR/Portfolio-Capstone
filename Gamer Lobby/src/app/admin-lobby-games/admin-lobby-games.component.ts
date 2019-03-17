import { Component, OnInit } from '@angular/core';
import { GAMES } from '../mock-players';
@Component({
  selector: 'app-admin-lobby-games',
  templateUrl: './admin-lobby-games.component.html',
  styleUrls: ['./admin-lobby-games.component.css']
})
export class AdminLobbyGamesComponent implements OnInit {

  games = GAMES;

  constructor() { }

  ngOnInit() {
  }

}
