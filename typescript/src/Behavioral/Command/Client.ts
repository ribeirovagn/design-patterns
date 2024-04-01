import Light from "./Light";
import RemoteControl from "./RemoteControll";
import TurnOffCommand from "./TurnOffCommand";
import TurnOnCommand from "./TurnOnCommand";

const light = new Light();

const turnOnCommand = new TurnOnCommand(light);
const turnOnButton = new RemoteControl(turnOnCommand);
turnOnButton.pressButton();
console.log(light.getStatus());

const turnOffCommand = new TurnOffCommand(light);
const turnOffButton = new RemoteControl(turnOffCommand);
turnOffButton.pressButton();
console.log(light.getStatus());