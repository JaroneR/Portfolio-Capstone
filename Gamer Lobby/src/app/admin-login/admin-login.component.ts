import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-admin-login',
  templateUrl: './admin-login.component.html',
  styleUrls: ['./admin-login.component.css']
})
export class AdminLoginComponent implements OnInit {
  private user: string;
  private pass: string;


  adminLogin(){
    if(this.user != 'admin' || this.pass !='revolution1'){
      alert("Entered wrong password");
      window.location.href = '/admin-login';
    }else{
      window.location.href = '/admin-lobby';
    }
  }
  constructor() { }

  ngOnInit() {
  }

}
