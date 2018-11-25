import { Observable } from 'rxjs';
import { HttpClient } from '@angular/common/http';
import { Component } from '@angular/core';
import {NavController} from '@ionic/angular';

@Component({
  selector: 'app-contact',
  templateUrl: 'contact.page.html',
  styleUrls: ['contact.page.scss']
})
export class ContactPage {
  public item:any;
  constructor(public navCtrl: NavController,public http: HttpClient)
  {
  this.loadData();
    
  }
  loadData()
  {
    let data:Observable<any>;
    
    data = this.http.get('http://localhost/servicephp/list.php');
    data.subscribe(result => {
      this.item = result;
    }
      
      
      )
  }
 }


  



