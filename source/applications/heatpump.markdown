---
layout: page
title: "Heat Pump Monitoring"
description: "Heat Pump Monitoring"
date: 2020-08-27 14:28
sidebar: true
comments: false
sharing: true
footer: true
---

The OpenEnergyMonitor system can be used to monitor the performance of heat pumps. The following covers a number of different configurations of the system from basic to more advanced monitoring.

![HeatpumpMonitoring](/images/applications/heatpump/hpdata.png)

### Level 1: Electricity Consumption:

<img src="/images/applications/heatpump/config/hpmon_config_emonpi_ct_only.png" style="max-width:300px; float:right; margin-left:20px">

At a basic level it is possible to use either the EmonTx or the EmonPi to monitor the electrical consumption of a heat pump by clipping a CT sensor around the supply to the unit. This provides detailed 10s resolution power consumption graphs as well as cumulative energy consumption in kWh on a daily/monthly/annual basis. It's possible to use the power graphs to gain a basic insight into potential issues such as excessive cycling.

To install an EmonPi or EmonTx follow the general setup guides here, clip the CT sensor around either the insulated line or neutral cable for the heat pump rather than the whole house cable.

- [Install emonPi](/setup/install/)
- [Install emonTx & emonBase](/setup/install-emontx/)
- [Install emonTx & ESP8266](/setup/esp8266-adapter-emontx/)

It is also possible to measure the electricity consumption with higher accuracy using a pulse output from an electricity meter, mbus or modbus output from an SDM120 DIN rail mounted meter.

- [+ Add Pulse Counting](/setup/pulse-counting/)
- [Reading from electricity meters that support MBUS (e.g MBUS version of the SDM120)](/integrations/emonhub-interfacers#mbus-reader-for-electric-and-heat-meters)
- [Reading from a Modbus SDM120 electricity meter using emonPi/emonBase](/integrations/emonhub-interfacers#reading-from-a-sdm120-single-phase-meter)

<img src="/images/applications/heatpump/config/hpmon_config_emonpi_ct_temps.png" style="max-width:300px; float:right; margin-left:20px;">

### Level 2: System temperatures:

Since the performance of a heat pump is greatly affected by the working temperatures, it is very useful to monitor the following system temperatures:

1. The water flow and return temperature from the heat pump unit.
2. For air-source heat pumps: The outside air temperature.
3. For ground-source heat pumps: The source inlet and outlet temperatures.
4. The hot water cylinder temperature (top and bottom).

The EmonTx and EmonPi units both support temperature sensing using one-wire DS18B20 temperature sensors, see the following setup guide for examples of how to connect up temperature sensors:

- [Reading from multiple DS18B20 temperature sensors using an EmonTx or EmonPI](/setup/temperature-sensors/)

*The theoretical performance of a heat pump is given by the Carnot COP equation, see [Learn: A very simple heat pump model](https://learn.openenergymonitor.org/sustainable-energy/building-energy-model/heatpumpmodel). For an air-source heatpump measuring the water flow temperature and the outside air temperature can be used to estimate the expected COP. Many heat pumps provide an indication of expected COP at different ambient air and water temperatures in their datasheets. The Emoncms heat pump app includes a tool to estimate COP using this equation.*

### Level 3: Flow rate & Heat metering:

<img src="/images/applications/heatpump/config/hpmon_config_emonpi_ct_mbus.png" style="max-width:300px; float:right; margin-left:20px">

The COP of a heat pump can be measured more accurately by measuring the heat output in addition to the electrical input. This can be done by either interfacing with a heat meter using MBUS (e.g: Sharky 775, Sontex superstatic 440, Kamstrup 403 or Qalcosonic E3) or a pulse counter, or a flow meter with an analog voltage output (Grundfos or Sika Vortex Flow Meter).

- A heat meter with a pulse output can be connected to either the EmonTx or the EmonPi, see:<br> [+ Add Pulse Counting](/setup/pulse-counting)
<!--- Using the analog input on a EmonTx or EmonPi to interface with an analog voltage output from a Grundfos or Sika Vortex Flow Meter-->
- Using our [MBUS to USB](https://shop.openenergymonitor.com/m-bus-to-usb-converter/) reader that plugs into a EmonPi or EmonBase. Setup and emonhub interfacer configuration documentation is available here: [MBUS Reader for Electric and Heat meters](/integrations/emonhub-interfacers#mbus-reader-for-electric-and-heat-meters).
- Please read our guide on selecting the right heat meter, available in our heat pump monitor github repository here: [Github: Guide to selecting the right heat meter](https://github.com/openenergymonitor/HeatpumpMonitor/blob/master/selectingheatmeter.md)

#### Heatpump Monitor Development boards

In addition to configurations using our standard emonPi and emonTx monitoring hardware. We have also developed dedicated hardware designs with heat pump monitoring in mind. This started with a through-hole heat pump monitoring kit that tried to incorporate all options on a single board and has since moved on to a more specific MBUS and temperature data collection approach with the new RaspberryPi based monitor. 

#### New: RaspberryPi & MBUS based heat pump monitor

<img src="/images/applications/heatpump/pimbusreader.jpeg" style="max-width:300px; float:right; margin-left:20px">

This is a new heat pump monitor board designed specifically for interfacing with MID standard electricity and heat meters via MBUS. It has a RaspberryPi at it's core running our emonSD image enabling local or/and remote logging and data visualisation.<br>
[Github: RaspberryPi & MBUS based heat pump monitor](https://github.com/openenergymonitor/HeatpumpMonitor/tree/master/HeatpumpMonitorPi)

<div style="clear:both"></div><br>

<img src="/images/applications/heatpump/hpmon.jpg" style="max-width:300px; float:right">

#### Through-hole heat pump monitor kit

The original through-hole heat pump monitoring kit. Combines CT based energy monitoring with an MBUS reader, Elster A100C IrDa input, DS18B20 temperature sensing inputs and ESP8266 WiFi connectivity. The board is currently only available as a through-hole kit that requires assembly and soldering. For more information, assembly and installation guides see: <br>
[Github: Original Through-hole heat pump monitor kit](https://github.com/openenergymonitor/HeatpumpMonitor/tree/master/HeatpumpMonitorTH)

<div style="clear:both"></div><br>

### Heat pump monitoring dashboard

Emoncms includes an application specific heat pump dashboard available in the Apps module. The following video gives a good overview of what this dashboard can do, how to access daily electricity consumption and heat output data as well as detailed system temperature and power data.

There's also a little feature shown briefly at the end that simulates the heat output and COP of the heat pump based on the Carnot COP equation.

<div class='videoWrapper'>
<iframe width="560" height="315" src="https://www.youtube.com/embed/jBY1Sx3LR2o" frameborder="0" allowfullscreen></iframe>
</div>

It's also worth checking out David Bowen (@MyForest on the forum's) heat pump app, see forum post: [Heat Pump Experimentation App - Release News](https://community.openenergymonitor.org/t/heat-pump-experimentation-app-release-news/13423).

### Heat pump monitoring hardware configurations

As discussed above, there are a number of different hardware configurations that can be used for heat pump monitoring. The following gives a quick overview of the main options.

<style>
table { border-collapse: collapse; }
table, th, td {
  border: 1px solid #888;
}
ul {
margin-left:15px;
font-size:14px;
}
</style>

<table>
  <tr>
    <td>
      <div style="margin-bottom:5px"><b>EmonPi: Electric & Temperature</b></div>
      <img src="/images/applications/heatpump/config/hpmon_config_emonpi_ct_temps.png" style="max-width:350px">
    </td>
    <td>
      <ul>
      <li>Easy installation on existing system.</li>
      <li>Monitor electricity consumption and system temperatures.</li>
      <li>Estimate COP using flow and outside temperature.</li>
      <li>Wifi or Ethernet connectivity.</li>
      <li>EmonPi LCD makes setup easier.</li>
      <li>Option to store and access data locally.</li>
      </ul>
    </td>
  </tr>
  <tr>
    <td>
      <div style="margin-bottom:5px"><b>EmonTx WiFi: Electric & Temperature</b></div>
      <img src="/images/applications/heatpump/config/hpmon_config_emontx_wifi_ct_temps.png" style="max-width:350px">
    </td>
    <td>
      <ul>
      <li>Easy installation on existing system.</li>
      <li>Monitor electricity consumption and system temperatures.</li>
      <li>Estimate COP using flow and outside temperature.</li>
      <li>Wifi connectivity.</li>
      <li>Requires cloud / remote server data storage.</li>
      <li>Lowest cost of hardware.</li>
      </ul>
    </td>
  </tr>
  <tr>
    <td>
      <div style="margin-bottom:5px"><b>EmonTx + EmonBase: Electric & Temperature</b></div>
      <img src="/images/applications/heatpump/config/hpmon_config_emontx_emonbase_ct_temps.png" style="max-width:350px">
    </td>
    <td>
      <ul>
      <li>Easy installation on existing system.</li>
      <li>Monitor electricity consumption and system temperatures.</li>
      <li>Estimate COP using flow and outside temperature.</li>
      <li>Wifi or Ethernet connectivity.</li>
      <li>Option to store and access data locally on the emonBase.</li>
      <li>433 MHz radio link between EmonTx and EmonBase</li>
      </ul>
    </td>
  </tr>
  <tr>
    <td>
      <div style="margin-bottom:5px"><b>EmonPi with MBUS Reader for heat meter</b></div>
      <img src="/images/applications/heatpump/config/hpmon_config_emonpi_ct_mbus.png" style="max-width:350px">
    </td>
    <td>
      <ul>
      <li>Requires in-line installation of heat meter.</li>
      <li>Monitor electricity consumption, system temperatures and heat output.</li>
      <li>Calculate COP using heat and electricity measurements.</li>     
      <li>Wifi or Ethernet connectivity.</li>
      <li>EmonPi LCD makes setup easier.</li>
      <li>Option to store and access data locally on the emonBase.</li>
      </ul>
    </td>
  </tr>
  <tr>
    <td>
      <div style="margin-bottom:5px"><b>EmonPi with MBUS Reader</b></div>
      <img src="/images/applications/heatpump/config/hpmon_config_emonpi_mbus.png" style="max-width:350px">
    </td>
    <td>
      <ul>
      <li>High accuracy electricity and heat monitoring.</li>
      <li>Requires in-line installation of electric and heat meter.</li>
      <li>Monitor electricity consumption, system temperatures and heat output.</li>
      <li>Accurate COP using heat and electricity measurements.</li>
      <li>Wifi or Ethernet connectivity.</li>
      <li>EmonPi LCD makes setup easier.</li>
      <li>Option to store and access data locally on the emonBase.</li>
      </ul>
    </td>
  </tr>
  <tr>
    <td>
      <div style="margin-bottom:5px"><b>RaspberryPi & MBUS based heat pump monitor</b></div>
      <img src="/images/applications/heatpump/config/hpmon_config_hpmonpi.png" style="max-width:350px">
      <br><br>
     <i>Please get in contact via email for availability.</i>
    </td>
    <td>
      <ul>
      <li>High accuracy electricity and heat monitoring.</li>
      <li>Requires in-line installation of electric and heat meter.</li>
      <li>Monitor electricity consumption, system temperatures and heat output.</li>
      <li>Accurate COP using heat and electricity measurements.</li>
      <li>Wifi connectivity.</li>
      <li>Option to store and access data locally on the emonBase.</li>
      <li>Slightly lower cost than EmonPi with external MBUS reader option.</li> 
      </ul>

    </td>
  </tr>

</table>


