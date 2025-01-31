# <em>Mol-xr</em>
 Molecules viewer in XR environment.<br>
 <!--
 Live demo: <a href='https://molxr.yesbird.ru'>molxr.yesbird.ru</a>
 -->

### <em>Usage</em><br>
  Edit file <b>molxr.js</b> to point to your model:
  ```
  11: const OBJ_PATH = 'data/models/pdb/aspirin.pdb';
  ```
  Install node: <a href='https://nodejs.org/en/download'>nodejs.org/en/download</a> 

  Install dependencies and run server:
  ```
  npm install
  npm start
  ```
  Open location in PC browser:
  ```
  http://localhost:3000
  ```
  <img src="https://github.com/syanenko/zxr/assets/6688301/15b0cefd-ef55-44d8-98a8-cc21b1bf314c" width='30'/> use video from camera as background by clicking camera icon.<br>

  Enable developer mode on your headset.<br>
  Connect headset by USB and check connection: 
  ```
  .\bin\adb devices
  ```

  Forward port to headset:
  ```
  .\bin\adb reverse tcp:3000 tcp:3000
  ```

  Open location in headset's browser:
  ```
  http://localhost:3000
  ```
  <img src="https://github.com/syanenko/zxr/assets/6688301/e265acc3-742b-4d91-9cf0-eb0b1c8df5ba" width='30'/> enter XR mode by clicking cube icon.<br>
   
  
  Contact: [LinkedIn](https://www.linkedin.com/in/sergey-yanenko-57b21a96/).
