import Light from "../../src/Behavioral/Command/Light"
import RemoteControl from "../../src/Behavioral/Command/RemoteControll";
import TurnOffCommand from "../../src/Behavioral/Command/TurnOffCommand";
import TurnOnCommand from "../../src/Behavioral/Command/TurnOnCommand";

let light: Light;
let turnOn: TurnOnCommand;
let turnOff: TurnOffCommand;
let buttonTurnOn: RemoteControl;
let buttonTurnOff: RemoteControl;

beforeAll(() => {
    light = new Light();
    turnOn = new TurnOnCommand(light);
    turnOff = new TurnOffCommand(light);
    buttonTurnOn = new RemoteControl(turnOn);
    buttonTurnOff = new RemoteControl(turnOff);
});

test(" [*] Light ON", () => {
    buttonTurnOn.pressButton();
    expect(light.getStatus()).toBe(" [*] Light ON");
});

test(" [*] Light OFF", () => {
    buttonTurnOff.pressButton();
    expect(light.getStatus()).toBe(" [*] Light OFF");
});