import { Observable } from 'rxjs';
import { HttpClient } from '@angular/common/http';
import { Component } from '@angular/core';
import {NavController} from '@ionic/angular';

@Component({
  selector: 'app-home',
  templateUrl: 'home.page.html',
  styleUrls: ['home.page.scss']
})


export class HomePage {
  public item:any;
  constructor(public navCtrl: NavController,public http: HttpClient)
  {
  this.loadData();
    
  }
  loadData()
  {
    let data:Observable<any>;
    
    data = this.http.get('http://localhost/servicephp/ob.php');
    data.subscribe(result => {
      this.item = result;
    }
      
      
      )
  }
}