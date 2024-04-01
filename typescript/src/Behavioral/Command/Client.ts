import Light from "./Light";
import RemoteControl from "./RemoteControll";
import TurnOffCommand from "./TurnOffCommand";
import TurnOnCommand from "./TurnOnCommand";

const light = new Light();

const turnOnCommand = new TurnOnCommand(light);
const turnOffCommand = new TurnOffCommand(light);

const remoteControll = new RemoteControl(turnOnCommand);
remoteControll.pressButton();

console.log(light.getStatus());

